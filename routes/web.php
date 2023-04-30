<?php

use Illuminate\Support\Facades\Auth;
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

Route::prefix('/app')->name('products.')->controller(\App\Http\Controllers\ProductController::class)-> group(function() {

    Route::get('/', 'filter')->name('filter');

    Route::get('/products/{id}', 'show')->where(['id' => '[0-9]+'])->name('show');
    
});

Auth::routes();

Route::prefix('/admin')->name('admin.')->controller(\App\Http\Controllers\AdminController::class)->group(function () {

    Route::get('/', function () {return redirect('/admin/products');});

    Route::get('/products', 'products')->name('products');

    Route::get('/products/new', 'createProduct')->name('createProduct');

    Route::post('/products/new', 'store');

    Route::get('/products/{product}/edit', 'editProduct')->name('editProduct');

    Route::post('/products/{product}/edit', 'updateProduct');

    Route::get('/categories', 'categories')->name('categories');

});


