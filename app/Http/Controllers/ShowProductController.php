<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ShowProductController extends Controller
{
    public function index($product){
        $product = Product::where('slug', $product)->with('category')->first();
        return view('web.Product.index', compact('product'));
    }
}
