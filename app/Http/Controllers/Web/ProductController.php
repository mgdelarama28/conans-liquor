<?php

namespace App\Http\Controllers\Web;

use App\Models\Category;
use App\Models\Product;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $categories = Category::all();

        return view('web.pages.products.index', [
            'categories' => $categories,
            'isProductPage' => true,
        ]);   
    }

    public function show($id)
    {
        $product = Product::find($id);

        return view('web.pages.products.show', [
            'product' => $product,
        ]);
    }
}
