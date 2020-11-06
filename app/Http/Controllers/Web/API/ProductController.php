<?php

namespace App\Http\Controllers\Web\API;

use App\Models\Product;
use App\Models\Category;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::with('category')->get();

        return response()->json([
            'products' => $products,
        ]);
    }

    public function filterByCategory($categoryId)
    {
        $products = Product::with('category')->where('category_id', $categoryId)->get();

        return response()->json([
            'products' => $products,
        ]);
    }
}
