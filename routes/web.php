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

Route::get('/productos', 'Product\ProductController@product_detail')->name('products.all');

Route::get('/productos/{slug}', 'Product\ProductController@product_detail')->name('product.detail');

<<<<<<< HEAD
Route::view('/contacto', 'contact')->name('contact');

Route::post('/send-mail', 'Product\ProductController@send_mail')->name('send.mail');
=======
Route::view('/contacto', 'contact')->name('contact');
>>>>>>> 00fb4fd759698009cc62057d227ca47ba5429fd8
