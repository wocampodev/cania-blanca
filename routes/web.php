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

Route::view('/productos', 'products')->name('products.all');

//Route::view('/productos/{slug}', 'product-detail')->name('product.detail');


Route::view('/hierba-luisa', 'product-detail')->name('product.detail_hierba_luisa');
Route::view('/mosto-verde', 'product-detail')->name('product.detail_mosto_verde');
Route::view('/uva-italia', 'product-detail')->name('product.detail_uva_italia');
Route::view('/macerado-damasco', 'product-detail')->name('product.detail_macerado_damasco');
Route::view('/manzanilla', 'product-detail')->name('product.detail_manzanilla');
Route::view('/cogollito', 'product-detail')->name('product.detail_cogollito');


Route::view('/contacto', 'contact')->name('contact');
