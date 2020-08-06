<?php

namespace App\Http\Controllers;

use App\Products;

use Darryldecode\Cart\Facades\CartFacade as Cart;
use Illuminate\Http\Request;

class ShoppingController extends Controller
{
    public function add_to_cart(){

        // dd(request()->all());
        $product=Products::find(request()->pdt_id);
        // Cart::clear();
        Cart::remove($product->id);       
        $c=Cart::add([
            'id' => $product->id,
            'name' => $product->name,
            'price' => $product->price,
            'quantity' => request()->qty,
            'associatedModel' => 'App\Products'
        ]);
        // dd(Cart::getContent()->toArray());
        return redirect()->route('cart');
    }


    public function delete($id){
        Cart::remove($id);
        return redirect()->back(); 
    }

    public function inc($id,$qty)
    {
        Cart::update($id,array(
            'quantity' => 1));
        return redirect()->back();
    }
    public function dec($id,$qty)
    {
        Cart::update($id,array(
            'quantity' => -1));
        return redirect()->back();

    }

    public function rapid_add($id){
        // dd(request()->all());
        $product=Products::find($id);
        // Cart::clear();
        Cart::remove($product->id);       
        $c=Cart::add([
            'id' => $product->id,
            'name' => $product->name,
            'price' => $product->price,
            'quantity' => 1,
            'associatedModel' => 'App\Products'
        ]);
        // dd(Cart::getContent()->toArray());
        return redirect()->route('cart');
    }
    
}
