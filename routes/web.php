<?php

use App\Product;
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

Route::prefix('/products')->name('products.')-> group(function() {

    Route::get('/', function (Request $request){
        return App\Models\Product::paginate(6);
    })->name('index');

    Route::get('/{id}', function (string $id, Request $request){
        $product = App\Models\Product::findOrFail($id);
        return $product;
    })->where([])->name('show');
    
});




// Route::get('/generatePost', function () {
//     $product = App\Models\Product::create([
//         'name'=>'nameTest',
//         'desc'=> 'Lorem ipsum dolor sit',
//         'price'=>12,
//         'imageUrl'=> 'https://picsum.photos/200',
//         'category_id'=>'2',
//         'size_id'=>'3',
//         'state_id'=>'1',

//     ]);

//     $product->save();

//     return $product;
// });

// Route::get('/test', function () {
//     $allPosts = App\Models\Product::all();

//     dd($allPosts);

//     return view('home');
// });

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
