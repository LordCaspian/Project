<?php

namespace App\Http\Controllers;
use App\Models\Product;
use Illuminate\Http\Request;

class DetailController extends Controller
{

    public function detail($id) {
//        $product = Product::findOrFail($id);
        $product = Product::find($id);

        if (!$product) {
            return redirect()->back()->withErrors('Product not found');
        }

        return view('detail', ['product' => $product]);
    }
//        return view('frontend.detail', compact('product'));

}
