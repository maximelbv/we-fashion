<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return redirect('/app');
});

Route::prefix('/products')->name('products.')->controller(\App\Http\Controllers\ProductController::class)-> group(function() {

    Route::get('/', 'index')->name('index');

    Route::get('/{id}', 'show')->where([
        'id' => '[0-9]+'
    ])->name('show');
    
});




Route::get('/testMen', function () {

    $menPosts = App\Models\Product::where('category_id', 1)->get();

    dd($menPosts);

    return $menPosts;
});

Route::get('/admin', function () {
    return view('administration');
});

Route::prefix('/app')->group(function () {
    Route::get('/', function () {
        return view('home');
    });

    Route::get('/discount', function () {
        return view('home');
    });

    Route::get('/women', function () {
        return view('home');
    });

    Route::get('/men', function () {
        return view('home');
    });
});
