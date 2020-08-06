<?php

use Illuminate\Support\Facades\Auth;
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

Route::get('/','FrontEndController@index' );

Route::get('product/{id}','FrontEndController@single')->name('product.single');

Route::post('cart/add','ShoppingController@add_to_cart')->name('cart.add');


Route::get('cart', 'FrontEndController@cart')->name('cart');

Route::get('cart/delete/{id}','ShoppingController@delete')->name('cart.delete');

Route::get('cart/inc/{id}/{qty}','ShoppingController@inc')->name('cart.inc');

Route::get('cart/dec/{id}/{qty}','ShoppingController@dec')->name('cart.dec');

Route::get('cart/rapid_add/{id}','ShoppingController@rapid_add')->name('rapid.add');

Route::get('checkout','CheckoutController@index')->name('cart.checkout');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('products', 'ProductsController');
