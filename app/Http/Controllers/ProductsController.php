<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;
use App\Product;

class ProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::all();
        return view('catalog.products.view')->with("products",$products);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();
        return view('catalog.products.create',compact('categories', $categories));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //dd($request->input());
        $product = new Product();
        $product->name = $request->input('name');
        $product->slug = str_slug($request->input('name'));
        $product->description = $request->input('description');
        $product->category_id = $request->input('categories');
        $product->save();
        $message = "Product Created";
        return redirect('/products')->with('global', $message);;
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
    public function edit($slug)
    {
        $product = Product::where('slug', $slug)->first();
        //dd($product);
        $categories = Category::all();
        return view('catalog.products.edit',compact('product','categories'));
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
        //dd($request->input());
        $product = Product::find($id);
        $product->name = $request->input('name');
        $product->slug = str_slug($request->input('name'));
        $product->description = $request->input('description');
        $product->category_id = $request->input('categories');
        $product->save();
        $message = "Product Updated";
        return redirect('/products')->with('global', $message);;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $product = Product::find($id);

        $product->delete();

        $message = "Product Deleted";

        return redirect('/products')->with('global', $message);
    }

    
}
