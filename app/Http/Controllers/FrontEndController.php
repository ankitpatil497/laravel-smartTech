<?php

namespace App\Http\Controllers;

use App\Products;
use Illuminate\Http\Request;

class FrontEndController extends Controller
{
    public function index()
    {
        return view('index')->with('products', Products::paginate(9));
    }

    public function single( $product){
        return view('single')->with('products',Products::find($product));
    }
    public function cart(){
        return view('cart');
    }
}
