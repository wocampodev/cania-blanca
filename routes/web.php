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

Route::view('/', 'home')->name('home');

Route::view('/nosotros', 'about')->name('about');

Route::get('/productos', 'Product\ProductController@getProducts')->name('products.all');

Route::get('/productos/{slug}', 'Product\ProductController@product_detail')->name('product.detail');

Route::view('/contacto', 'contact')->name('contact');

Route::post('contacto-web', 'Web\SolicitudeController@new_contact');
