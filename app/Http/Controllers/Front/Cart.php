<?php

namespace App\Http\Controllers\Front;

use Gloudemans\Shoppingcart\Cart as CartMo;
use App\Http\Controllers\Controller;
use App\Models\Product;
use Gloudemans\Shoppingcart\Facades\Cart as FacadesCart;
use Illuminate\Http\Request;
class Cart extends Controller
{
    protected $listeners = ['cart_updated' => 'render'];
    public function store()
    {



        // dd(request()->all());
        request()->validate([
            'product_id'=>'required',
            'product_name'=>'required',
            'price'=>'required',
        ]);
        CartMo::add(
            request()->input('proID'),
            request()->input('name'),
            request()->input('price'),
        );

        dd("dsiugaewuif");
        // return redirect()->with('status','it worked!!!');
    }

    public function counter()
    {
        $cart_count = FacadesCart::content()->count();
        dd($cart_count);
        return view('layout.front.index', compact('cart_count'));
    }

}
