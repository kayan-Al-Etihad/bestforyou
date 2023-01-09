<?php

namespace App\Http\Controllers\Front;

use Gloudemans\Shoppingcart\Cart as CartMo;
use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;
class Cart extends Controller
{

    public function cartList()
    {
        // $cartItems = \Cart::getContent();
        return view('Front.cart.cart');
    }

    public function addToCart(Request $request) {
        $product = Product::findOrFail($request->input('id'));
        CartMo::add(
            $product->product_id,
            $product->product_name,
            $product->price,
            $product->cover,
        );
        return redirect()->session('succsess','it worked');
    }

    public function updateCart(Request $request)
    {
        //dd($request->quantity);

        \Cart::update($request->id, array(
            'quantity' => $request->quantity, // so if the current product has a quantity of 4, another 2 will be added so this will result to 6
        ));

        session()->flash('success', 'Item Cart is Updated Successfully !');

        return redirect()->route('cart.list');
    }

    public function removeCart(Request $request)
    {

        \Cart::remove($request->id);
        session()->flash('success', 'Item Cart Remove Successfully !');

        return redirect()->route('cart.list');
    }

    public function clearAllCart()
    {
        \Cart::clear();

        session()->flash('success', 'All Item Cart Clear Successfully !');

        return redirect()->route('cart.list');
    }
}
