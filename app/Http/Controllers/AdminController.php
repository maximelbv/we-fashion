<?php

namespace App\Http\Controllers;

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

    public function editProduct()
    {
        return view('admin.edit');
    }

    public function categories() {
        return view('admin.categories');
    }
}
