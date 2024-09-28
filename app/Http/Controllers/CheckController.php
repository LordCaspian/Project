<?php

namespace App\Http\Controllers;

class CheckController extends Controller
{
    public function checkout() {
        $cart = session()->get('cart', []);
        if (!$cart) {
            return redirect()->route('shop')->with('error', 'Your cart is empty!');
        }
        // Payment and order logic can go here
        return view('frontend.checkout', compact('cart'));
    }

}
