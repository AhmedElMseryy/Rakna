<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use Illuminate\Http\Request;

class CartController extends Controller
{
    public function cart()
    {
        $user_id = auth()->user()->id;

        $cartproducts = Cart::with('Product')->where('user_id', $user_id)->get();

        $cartproducts->sum(function ($item) {
            return $item->product->price * $item->quantity;
        });

        return view('theme.cart', compact('cartproducts'));
    }

    ##--------------------------------------------------ADD 
    public function add($productid)
    {


        $user_id = auth()->user()->id;

        $result = Cart::where('user_id', $user_id)->where('product_id', $productid)->first();


        if ($result) {
            $result->quantity += 1;
            $result->save();
        } else {
            $newCart = new Cart();
            $newCart->product_id = $productid;
            $newCart->user_id = auth()->user()->id;
            $newCart->quantity = 1;
            $newCart->save();
        }


        return redirect('/cart');
    }

    ##--------------------------------------------------REMOVE
    public function remove($cartid)
    {
        Cart::find($cartid)->delete();
        return redirect('/cart');
    }
}
