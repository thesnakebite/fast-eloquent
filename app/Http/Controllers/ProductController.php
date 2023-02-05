<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::query()
            ->select(['title', 'slug', 'category_id', 'image']) 
            ->with('category:id,title,slug')
            ->paginate();

        return view('products', compact('products'));
    }
}
