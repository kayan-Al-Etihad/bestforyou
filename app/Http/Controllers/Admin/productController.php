<?php

namespace App\Http\Controllers\Admin;

use App\Exceptions\SessionExpiredException;
use App\Http\Controllers\AppBaseController;
use App\Http\Requests\Products\productRequest;
use App\Http\Requests\Products\SecondStepProductRequest;
use App\Http\Requests\Products\UpdateProductRequest;
use App\Models\brand;
use App\Models\Category;
use App\Models\category_produc;
use App\Models\category_product;
use App\Models\Color;
use App\Models\Photo;
use App\Models\Product;
use App\Models\product_category;
use App\Models\Tag;
use App\Repositories\ProductRepository;
use Illuminate\Contracts\View\Factory;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Validation\ValidationException;
use Illuminate\View\View;
use Throwable;
use Illuminate\Support\Facades\Redirect;

class productController extends AppBaseController
{
    private $productRepo;
    private $product;
    private $category;
    private $paginate;


    public function __construct(ProductRepository $repository)
    {
        $this->middleware('permission:product-list|product-create|product-edit|product-delete', ['only' => ['index', 'show']]);
        $this->middleware('permission:product-create', ['only' => ['create', 'store']]);
        $this->middleware('permission:product-edit', ['only' => ['edit', 'update']]);
        $this->middleware('permission:product-delete', ['only' => ['destroy']]);

        $this->productRepo = $repository;
        $this->product = new Product();
        $this->category = new Category();
        $this->paginate = $repository->paginateNum;

    }

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $products = $this->product->with(['categories', 'colors'])->paginate($this->paginate);
        $index_categories = $this->category->all(['category_slug', 'category_name']);
        return view($this->productRepo->viewPrefix . 'index', compact('products', 'index_categories'));
    }

    /**
     * take trash products
     * @return Factory|View
     */
    public function withTrash()
    {
        $products = $this->product->onlyTrashed()->with(['categories', 'colors'])->paginate($this->paginate);
        return view($this->productRepo->viewPrefix . 'index', compact('products'));
    }

    /**
     * sort and listing products
     * @param Request $request
     * @return Factory|JsonResponse|View
     * @throws ValidationException
     * @throws Throwable
     */
    public function sort(Request $request)
    {
        $this->validate($request, [
            'sort' => 'string|required',
            'sort_category' => 'string|nullable',
            'dcs' => 'string|required',
        ]);
        $index_categories = true;
        $query = $this->product;
        if ($request->status) {
            $query = $this->product->where('status', 1);
        }
        if ($cat_slug = $request->sort_category) {
            $products = $query->whereHas("categories", function ($query) use ($cat_slug) {
                return $query->where('category_slug', $cat_slug);
            })->orderBy("$request->sort", "$request->dcs")->paginate($this->paginate);

        } else {
            $products = $query->orderBy("$request->sort", "$request->dcs")->paginate($this->paginate);
        }
        if ($request->ajax()) {
            $view = view('admin.products._data', compact('products', 'index_categories'))->render();
            return response()->json(['html' => $view]);
        }
        // this var provide to display 'restore' icon
        return view($this->productRepo->viewPrefix . 'index', compact('products', 'index_categories'));
    }

    /**
     * Route : product/index/restore name:product.restore
     * @param $id
     * @return \Facade\FlareClient\Http\Response
     */
    public function restore(int $id)
    {
        $product = $this->productRepo->findWithTrash($id)->restore();
        return $this->productRepo->passResponse($product, 'products', 'restored');
    }

    /* Show the form for creating a new resource.
    *
    * @return \Illuminate\Http\Response
    */
    public function create()
    {
        $categories = Category::all();
        $brands = brand::all(['brand_id', 'brand_name']);
        return view($this->productRepo->viewPrefix . 'create', compact('brands','categories'));
    }


    /* Show the second step for creating a new resource.
    *
    * @return \Illuminate\Http\Response
    */

    public function createSecondStep()
    {
        $colors = Color::all(['color_id', 'color_name']);
        $categories = $this->category->all(['category_id', 'category_name']);
        return view($this->productRepo->viewPrefix . 'create2', compact('colors', 'categories'));
    }

    /**
     * Show tags in tag input- create product page .
     *
     * @param $tag string
     * @return Response
     */
    public function productTags(string $tag)
    {
        $tags = Tag::where('tag_slug', 'like', '%' . $tag . '%')->pluck('tag_name')->toArray();
        return response()->json($tags);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param App\Http\Requests\productRequest $request
     *
     * @return JsonResponse|RedirectResponse
     */
    public function store(Request $request)
    {
        // $request->validate([
        //     'brand_id'        =>'required',
        //     'product_name'    =>'required',
        //     'product_slug'    =>'required',
        //     'sku'             =>'required',
        //     'product_ranking' =>'required',
        //     'status'          =>'required',
        //     'data_available'  =>'required',
        //     'of_price'        =>'required',
        //     'has_size'        =>'required',
        //     'buy_price'       =>'required',
        //     'sale_price'      =>'required',
        //     'quantity'        =>'required',
        //     'weight'          =>'required',
        //     'made_in'          =>'required',
        //     'description'     =>'required',
        //     'cover'     =>'required',
        // ]);
        $file_name = $request->cover;
        $file_name->move(public_path('images'), $file_name->getClientOriginalExtension());

        $file_name1 = $request->image1;
        $file_name1->move(public_path('images'), $file_name1->getClientOriginalExtension());

        $file_name2 = $request->image2;
        $file_name2->move(public_path('images'), $file_name2->getClientOriginalExtension());

        // $file_name = time() . '.' . request()->cover->getClientOriginalExtension();
        // request()->cover->move(public_path('images'), $file_name);

        // $file_name1 = time() . '.' . request()->image1->getClientOriginalExtension();
        // request()->image1->move(public_path('images'), $file_name1);

        // $file_name2 = time() . '.' . request()->image2->getClientOriginalExtension();
        // request()->image2->move(public_path('images'), $file_name2);

        $product = new Product ;
        // dd($product->orderBy('product_id', 'DESC')->first());
        $product->product_name = $request->product_name;
        $product->brand_id = $request->brand_id;
        $product->product_slug = $request->product_slug;
        $product->sku = $request->sku;
        $product->product_type = $request->product_type;
        $product->data_available = $request->data_available;
        $product->off_price = $request->off_price;
        $product->buy_price = $request->buy_price;
        $product->sale_price = $request->sale_price;
        $product->quantity = $request->quantity;
        $product->weight = $request->weight;
        $product->description = $request->description;
        $product->made_in = $request->made_in;
        $product->cover = $file_name;
        $product->image1 = $file_name1;
        $product->image2 = $file_name2;
        $product->save();

        $product_id = $product->orderBy('product_id', 'DESC')->first();
        $id = $product_id['product_id'];
        $category_id = $request->category_id;
        $category_product = new product_category();
        // $category_product->category_id = $id;
        // dd($category_product->category_id);
        $category_product->product_id = $id;
        $category_product->category_id = $category_id;
        $attre = [
            'product_id' => $id,
            'category_id' => $category_id
        ];
        $post = product_category::create($attre);


        // return $this->index();
        return redirect()->route('product.index')->with('success','Operation Successful !');
    }

    /**
     * @param SecondStepProductRequest $request
     * @return JsonResponse|RedirectResponse
     * @throws SessionExpiredException
     */
    public function storeSecondStep(SecondStepProductRequest $request)
    {
        if (!session()->has('create-product')) {
            if ($request->ajax()){
                return $this->sendError('your session expired',440);
            }
            throw new SessionExpiredException();
        }
        $product = $this->productRepo->createProductSecondStep($request);
        if ($product) {
            session()->forget('create-product');
        }
        return $this->productRepo->passViewAfterCreated($product, 'products', 'product.index');
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return Response
     */
    public function show($id)
    {
        $product = $this->productRepo->find($id)->load('comments');
        $comments = $product->comments()->paginate(4);
        $colors = $product->colors(['color_name', 'color_code'])->get();
        $averageRating = $product->averageRating;
        $categories = $product->categories(['category_name'])->get();
        return view($this->productRepo->viewPrefix . 'show', compact(
            'product', 'comments', 'colors', 'averageRating', 'categories'
        ));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return Response
     */
    public function edit($id)
    {
        $product = $this->productRepo->find($id);
        $colors = Color::all(['color_id', 'color_name']);
        $p_colors = $product->colors->pluck('color_id')->toArray();
        $categories = $this->category->all(['category_id', 'category_name']);
        $p_categories = $product->categories->pluck('category_id')->toArray();
        $brands = brand::all(['brand_id', 'brand_name']);
        return view($this->productRepo->viewPrefix . 'edit',
            compact('product', 'colors', 'categories', 'brands', 'p_categories', 'p_colors'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param UpdateProductRequest $request
     * @param int $id
     * @return JsonResponse|RedirectResponse
     */
    public function update(Request $request, $id)
    {
        $product = Product::findOrFail($id);
        $product->product_name = $request->product_name;
        $product->product_slug = $request->product_slug;
        $product->product_type = $request->product_type;
        $product->cover = $request->cover;
        $product->image1 = $request->image1;
        $product->image2 = $request->image2;
        $product->made_in = $request->made_in;
        $product->description = $request->description;
        $product->sale_price = $request->sale_price;
        $product->buy_price = $request->buy_price;
        $product->weight = $request->weight;
        $product->quantity = $request->quantity;
        // dd(Request()->image1);
        $product->save();
        return redirect()->route('product.index')->with('success','Operation Successful !');



        // $product = $this->productRepo->updateProduct($request, $id);
        // return $this->productRepo->passViewAfterUpdated($product, 'products', 'product.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Facade\FlareClient\Http\Response
     */
    public function destroy($id)
    {
        $product = $this->productRepo->destroy($id);
        return $this->productRepo->passViewAfterDeleted($product, 'products');
    }


}
