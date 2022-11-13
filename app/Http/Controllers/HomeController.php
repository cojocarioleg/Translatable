<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Tag;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class HomeController extends Controller
{
   
    public function index()
    {
        $tags= Tag::orderBy('id', 'DESC')->get()->take(3);
        $products = Product::orderBy('id', 'DESC')->paginate(10);
        return view('web.home.index', compact(
            'tags',
            'products',
            
        ));
    }

    public function changeLocale($locale)
    {
        $availableLocales = ['ro','ru', 'en'];
        if (!in_array($locale, $availableLocales)) {
            $locale = config('app.locale');
        }
        session(['locale' => $locale]);
        App::setLocale($locale);
        return redirect()->back();

    }
}
