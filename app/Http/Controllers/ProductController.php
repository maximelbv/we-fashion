<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class ProductController extends Controller { 

    public function filter (Request $request) : View {
        $products = Product::query()->orderBy('id', 'desc')->orderBy('created_at', 'desc')->where('isPublished', '1');

        $category_id = $request->get('category_id');

        if ($category_id) {
            $products->where('category_id', $category_id);
        }

        if ($request->has('state')) {
            $products->where('state', 'promotion');
        }

        $products = $products->paginate(6)->appends(request()->query());

        return view('app.index', ["products" => $products]);
    }

    public function show (string $id): RedirectResponse | View {
        $product = Product::findOrFail($id);
        return view('app.show', [
            'product' => $product
        ]);
    }

}
