<?php

namespace App\Http\Controllers\Web\API;

use App\Models\Product;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::with('category')->paginate(8);

        return response()->json([
            'products' => $products,
        ]);
    }
}
