<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Http\Request;

class CartController extends Controller
{
    public function store(Request $request){
        $product = Product::findOrFail($request->input('product_id'));
        Cart::add($product->id,
        $product->name,
        $product->quantity,
        $product->price,
    );

    return redirect()->with('message','Successfully Added');
    }
}
