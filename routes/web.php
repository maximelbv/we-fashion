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

Route::get('/admin', [App\Http\Controllers\HomeController::class, 'index'])->name('admin');
