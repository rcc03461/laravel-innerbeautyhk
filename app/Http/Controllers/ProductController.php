<?php

namespace App\Http\Controllers;

use App\Product;
use App\File;
use Illuminate\Http\Request;


class ProductController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        // Auth::logout();
        // abort(404);
        $products = Product::all();
        return view('admin.product.list')->with("products", $products);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //

        // $files = File::all();
        return view('admin.product.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        // $title = $request->input('title');
        // dd(
        //     // $request->all()
        //     $request->input('images')
        // );

        $product = Product::create($request->all());

        $product->files()->sync($request->input('images'));
        // $product->update($request->all());
        return redirect()->route('product.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $product = Product::find($id);
        // $product_images = Array();
        // $product->image=[];
        $product_images = $product->files->map(function($f){
            return $f->id;
        });
        // dd($product);
        return view('admin.product.edit')->with("product", $product)->with("product_images", $product_images);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $product = Product::find($id);
        $product->url = $request->input('url');
        $product->title = $request->input('title');
        $product->excerpt = $request->input('excerpt');
        $product->content = $request->input('content');
        $product->price_origin = $request->input('price_origin');
        $product->price_selling = $request->input('price_selling');
        $product->save();
        $product->files()->sync($request->input('images'));
        // dd($request);
        return redirect()->route('product.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
