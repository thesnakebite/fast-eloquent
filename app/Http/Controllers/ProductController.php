<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(Request $request)
    {
        $products = Product::query()
            ->select(['title', 'slug', 'category_id', 'image']) 
            ->with('category:id,title,slug')
            ->when($request->input('categoria', function ($q, $categoryId) {
                $q->where('id', $categoryId);
            }))
            ->paginate();

        return view('products', compact('products'));
    }
}
