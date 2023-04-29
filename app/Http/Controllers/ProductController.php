<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\Pagination\Paginator;
use App;
use App\Models\Product;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class ProductController extends Controller { 


    public function index(): View {
        return view('app.index', [
            'products' => App\Models\Product::paginate(6)
        ]);
    }

    public function filter (Request $request) : View {
        $products = Product::query();

        $category_id = $request->get('category_id');

        if ($category_id) {
            $products->where('category_id', $category_id);
        }

        if ($request->has('state')) {
            $products->where('state', 'promotion');
        }

        $products = $products->paginate(6);

        return view('app.index', ["products" => $products]);
    }

    public function show (string $id): RedirectResponse | View {
        $product = App\Models\Product::findOrFail($id);
        return view('app.show', [
            'product' => $product
        ]);
    }

}
