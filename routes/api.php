<?php

use App\File;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
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
use App\Invoice;

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
        $product->files;
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

Route::post('/logorder', function (Request $request) {

    $form = $request->input("form");

    $invoice = Invoice::create([
        "payby" => "payapl",
        "name" => $form['name'],
        "email" => $form['email'],
        "tel" => $form['tel'],
        "address" => $form['address'],
    ]);

    $cart_products = $request->input("cart_products");
    foreach($cart_products as $key => $value ){
        // $invoice->products()->attach($value['id'], ['price_sold' => $value['price_celling']]);
        $invoice->products()->attach($value['id'], ['price_sold' => $value['price_selling']]);
    }

    $hash = md5($invoice->id . $invoice->created_at);
    $invoice->hash = $hash;
    $invoice->save();
    // // $inv = Invoice::findOrFail(1);
    // // // $inv->products()->attach(1, ['price_sold' => 100]);
    // // $inv->products()->sync([
    // //     1 => ['price_sold' => 100],
    // //     2 =>  ['price_sold' => 200],
    // // ]);

    return $invoice;
});

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
