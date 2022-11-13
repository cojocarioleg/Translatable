<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class ShowCategoryController extends Controller
{
    public function showCategories(){
        $categories = Category::orderBy('id', 'DESC')->paginate(2);
        return view('web.Categories.categories', compact('categories'));
    }

    public function showCategory($category){
        $category = Category::where('slug', $category)->with('products')->first();
        return view('web.Categories.category', compact('category'));
    }
}
