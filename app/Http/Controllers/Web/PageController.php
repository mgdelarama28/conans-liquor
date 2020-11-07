<?php

namespace App\Http\Controllers\Web;

use App\Models\Product;
use App\Models\Category;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index()
    {
        $categories = Category::all();
        $products = Product::with('category')->take(8)->get();
        
        return view('web.pages.index', [
            'categories' => $categories,
            'products' => $products,
        ]);
    }

    public function about()
    {
        $categories = Category::all();

        return view('web.pages.about', [
            'categories' => $categories,
        ]);
    }

    public function contact()
    {
        return view('web.pages.contact');
    }
}
