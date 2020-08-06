<?php

namespace App\Http\Controllers;

use App\Http\Requests\products\CreateProductsRequest;
use App\Http\Requests\products\EditProductsRequest;
use App\Products;
use File;
use Illuminate\Http\Request;

class ProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        return view('products.index')->with('products',Products::all());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('products.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateProductsRequest $request)
    {
        // dd($request->image->store('products'));
        $image=$request->image->store('products');
        $product=Products::create([
            'name'=>$request->name,
            'price'=>$request->price,
            'discription'=>$request->discription,
            'image'=>$image,
        ]); 
        
        session()->flash('success','Product create successfully');
        return redirect(route('products.index'));
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
    public function edit(Products $product)
    {
        return view('products.edit')->with('products',$product);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(EditProductsRequest $request,Products $product)
    {
        $data=$request->all();
        
        $product->name=$request->name;
        $product->price=$request->price;
        $product->discription=$request->discription;
        
        if($request->hasFile('image')){
            $image=$request->image->store('products');

            $product->deleteimage();
            $data['image']=$image;
        }
        $product->save();

        session()->flash('edit','Edit Products Successfully');

        return redirect(route('products.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($p)
    {
        
        $product=Products::find($p);
        if(file_exists($product->image)){
            unlink($product->image);
        }
        $product->delete();
       
        session()->flash('delete','Products Delete Successfully');
        return redirect()->back();
    }
}
