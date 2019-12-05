<?php

use App\File;
use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/



use App\Product;
use App\Product_meta;

Route::get('/images', function (Request $request) {

    $files = File::all();

    $files->map(function ($item) {
        $item['url'] = asset('storage/' . $item['path']);
        return $item;
    });

    return $files;
});

Route::get('/getproduct', function (Request $request) {

    $products = Product::all();

    $products->map(function($product){
        $product->images = $product->files;
        return $product;
    });
    // $products->map(function ($item) {
        // $item['url'] = asset('storage/' . $item['path']);
        // return $item;
    // });

    return $products;
});

Route::get('/getproduct/{id}', function ($id) {

    $product = Product::findOrFail($id);


    $product->images = $product->files;

    // $products->map(function ($item) {
        // $item['url'] = asset('storage/' . $item['path']);
        // return $item;
    // });

    return $product;
});

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
