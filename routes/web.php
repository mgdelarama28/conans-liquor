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

// Auth::routes();

Route::namespace('Web')->name('web.')->group(function() {
	Route::get('/', 'PageController@index')->name('index');
	Route::get('/products', 'ProductController@index')->name('products.index');
	Route::get('/products/{id}', 'ProductController@show')->name('products.show');
	Route::get('/shopping-cart', 'CartController@index')->name('cart.index');
	Route::get('/checkout', 'CartController@checkout')->name('cart.checkout');
});
