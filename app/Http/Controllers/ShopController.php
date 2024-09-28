<?php

namespace App\Http\Controllers;
use App\Models\Product;

class ShopController extends Controller
{
    public function shop() {
        $products = Product::all();
        return view('frontend.shop', compact('products'));
    }
}
