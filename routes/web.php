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

Route::view('/', 'home');

Route::view('/productos', 'products')->name('products.all');

Route::view('/productos/{slug}', 'product-detail')->name('product.detail');

Route::view('/contacto', 'contact')->name('contact');