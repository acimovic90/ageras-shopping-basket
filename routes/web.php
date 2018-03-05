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

Route::get('/', [
    'uses' => 'ProductController@index',
    'as' => 'product.index'
]);

Route::get('/add-product/{id}', [
    'uses' => 'ProductController@store',
    'as' => 'product.addProduct'
]);

Route::get('/reduce-one-item', [
    'uses' => 'ProductController@reduce',
    'as' => 'product.reduceOneItem'
]);

Route::get('/remove-products', [
    'uses' => 'ProductController@destroy',
    'as' => 'product.removeAllProducts'
]);

