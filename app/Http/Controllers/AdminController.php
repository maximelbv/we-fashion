<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateProductRequest;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */

    public function products() {

        $products = Product::query()->orderBy('id', 'desc')->orderBy('created_at', 'desc');
        $products = $products->paginate(15)->appends(request()->query());

        return view('admin.products', ["products" => $products]);
    }

    public function store(CreateProductRequest $request) {

        Product::create($request->validated());
        return redirect()->route('admin.products')->with('success', 'Product added' );
    }

    public function createProduct()
    {
        $categories = Category::all();
        return view('admin.createProduct', ['categories' => $categories]);
    }

    public function updateProduct(Product $product, CreateProductRequest $request)
    {
        $product->update($request->validated());
        return redirect()->route('admin.products')->with('success', 'Product updated');
    }

    public function editProduct(Product $product)
    {
        $categories = Category::all();

        return view('admin.editProduct', [
            'product' => $product,
            'categories' => $categories
        ]);
    }
    
    public function categories() {
        return view('admin.categories');
    }
}
