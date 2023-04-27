<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\Pagination\Paginator;
use App;
use App\Models\Product;
use Illuminate\Http\RedirectResponse;

class ProductController extends Controller
{
    public function index (): Paginator {
        return App\Models\Product::paginate(6);
    }

    public function show (string $id): RedirectResponse | Product {
        $product = App\Models\Product::findOrFail($id);
        return $product;
    }

}
