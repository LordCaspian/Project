<?php

namespace App\Http\Controllers;

class CartController extends Controller
{
    public function cart() {
        $cart = session()->get('cart', []);
        return view('frontend.cart', compact('cart'));
    }

}
