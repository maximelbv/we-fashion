<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\Pagination\Paginator;
use App;
use App\Models\Product;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

class ProductController extends Controller
{
    public function index (): View {

        return view('app.index', [
            'products' => App\Models\Product::paginate(6)
        ]);
    }

    public function show (string $id): RedirectResponse | View {
        $product = App\Models\Product::findOrFail($id);
        return view('app.show', [
            'product' => $product
        ]);
    }

}
