<?php

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

use App\File;
use App\Post;
use App\Product;
use App\Product_meta;
use App\Invoice;
use Illuminate\Http\Request;

// use Auth;

Route::get('/thankyou/{hash}', function ($hash) {

    $invoice = Invoice::where("hash", $hash)->with("products")->first();
    // if ($invoice) {
    //     # code...
    //     return view("pages.thankyou")->with("invoice", $invoice);
    // }else{
    //     abort(404);
    // }
    // return $invoice->products()->with("files");
    return view("pages.thankyou")->with("invoice", $invoice);

});

// Route::post('logout', ['as' => 'logout', 'uses' => 'Auth\LoginController@logout']);
Auth::routes(['register' => false]);
Route::resource('product', 'ProductController');
// Route::get('/home', 'HomeController@index')->name('home');


Route::get('/logout', function () {
    Auth::logout();
    return Redirect::to('login');
});
Route::get('/', function () {
    $products = Product::all();
    // dd(
    //     $products
    // );
    return view('pages.index')->with('products',$products);

});
Route::get('/dropzone', 'fileController@create');
Route::post('/dropzone', 'fileController@store');
Route::post('/ckUpload', 'fileController@ckUpload');
Route::get('/cart', function () {
    return view('pages.cart');
});


// Route::resource('post', 'PostController');
// Route::get('ckeditor', 'CkeditorController@index');
// Route::post('ckeditor/upload', 'CkeditorController@upload')->name('ckeditor.upload');


Route::get('/p/{product_url}', function ($product_url) {

    $product = Product::where('url', $product_url)->first();

    // dd(
    //     $product
    // );
    if ($product) {
        # code...
        return view('pages.product')->with('product', $product);
    }else{
        return redirect('/');
    }


});




// Route::get('mail', "MailsendController@mailsend");
// Route::get('mail', function(){
//     // Mail::send('emails.neworder', ['title' => 'body'], function ($message) {
//     //     $message->to('ych8815@gmail.com', 'John Smith')->subject('Welcome!');
//     // });
//     $to_name = "Hing";
//     $to_email = "ych8815@gmail.com";
//     $data=[
//         "name" => "Hello w",
//         "body" => "you get an new order"
//     ];
//     Mail::send("emails.neworder", $data, function($message) use ($to_name, $to_email) {
//         $message->to($to_email)->subject("new order");
//     });
// });
Route::post('mail-neworder', function(Request $request){
    // Mail::send('emails.neworder', ['title' => 'body'], function ($message) {
    //     $message->to('ych8815@gmail.com', 'John Smith')->subject('Welcome!');
    // });
    // $request->input('');
    $to_name = "Hing";
    $to_email = "ych8815@gmail.com";
    $data=[
        "name" => "Hello w",
        "body" => "you get an new order"
    ];
    Mail::send("emails.neworder", $data, function($message) use ($to_name, $to_email) {
        $message->to($to_email)->subject("new order");
    });
});
// Route::get('post/{url}', function ($url) {

//     $post = Post::where('url', $url)->first();

//     // dd(
//     //     $product
//     // );
//     if ($post) {
//         # code...
//         return view('pages.post')->with('post', $post);
//     }else{
//         return redirect('/');
//     }


// });


