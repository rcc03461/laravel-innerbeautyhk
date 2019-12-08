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
use Illuminate\Http\Request;
// use Auth;

// Route::get('/images', function (Request $request) {

//     $files = File::all();

//     $files->map(function($item){
//         $item['url'] = asset('storage/'.$item['path']);
//         return $item;
//     });

//     return $files;
// });
// Route::post('logout', ['as' => 'logout', 'uses' => 'Auth\LoginController@logout']);
Auth::routes(['register' => false]);
Route::resource('product', 'ProductController');
// Route::get('/home', 'HomeController@index')->name('home');


Route::get('/logout', function () {
    Auth::logout();
    return Redirect::to('login');
});
Route::get('/', function () {


    // $product = App\Product::findOrFail(1);


    // foreach( $product->files() as $image ){
    //     dd($image);
    // }
    // $product->files()->sync([1]);
    // // $product->files();

    // dd(
    //     $product->files
    // );

    // print_r($product);

    // die;
    $products = Product::all();
    // dd(
    //     $products
    // );
    return view('pages.index')->with('products',$products);

});

// Route::get('/sync', function () {

//     // $product = App\Product::findOrFail(2);
//     // $product->files()->sync([2]);

//     // return view('pages.add');
// });

Route::get('/dropzone', 'fileController@create');
Route::post('/dropzone', 'fileController@store');
Route::post('/ckUpload', 'fileController@ckUpload');



// Route::post('/add', function (Request $request) {


//     $title = $request->input('title');
//     // $slug = $request->input('slug');

//     // echo $title;
//     dd($title);
//     // return view('pages.cart');

//     // $product = new Product;

//     // $product->slug = "Disposable-Feminine-Cleansing-Gel";
//     // $product->title = "Disposable Feminine Cleansing Gel";
//     // $product->content = "<p>透明次酸性女性清潔凝膠，清潔陰道，預防敏感，陰道炎，除異味，止痕癢，除去不正常或過度分泌，平衡PH值，保持濕潤健康，純天然草本成份，不含藥性，無副作用，每支都是一次性使用，確保衛生。</p><p>用途：保養、護理、預防性質的綜合護理產品 一星期用一支，親熱後使用更可預防細菌感染。 若要去除異味、過多分泌，則隔日用，至少用三支。 若要去除痕癢，則連續3或6日，每天用一支。 用法: 睡前用最佳，放入內後擠出啫喱，用後無需清洗。 (注意: 請把管道頂端的塞拔出後方可使用。)</p>";

//     // $product->save();
//     // // $product->id;

//     // $Product_meta = new Product_meta;
//     // $Product_meta->product_id = $product->id;
//     // $Product_meta->meta_key = "excerpt";
//     // $Product_meta->meta_value = "透明次酸性女性清潔凝膠，清潔陰道，預防敏感，陰道炎，除異味，止痕癢，除去不正常或過度分泌，平衡PH值，保持濕潤健康，純天然草本成份，不含藥性，無副作用，每支都是一次性使用，確保衛生。";
//     // $Product_meta->save();

//     // return $product->id;






// });

Route::get('/cart', function () {
    return view('pages.cart');
});


// Route::resource('post', 'PostController');
Route::get('ckeditor', 'CkeditorController@index');
Route::post('ckeditor/upload', 'CkeditorController@upload')->name('ckeditor.upload');


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


