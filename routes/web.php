<?php

use Illuminate\Routing\RouteGroup;
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

Route::get('/', 'ProductController@index')->name('index');
Route::get('/contact', 'ProductController@contact')->name('contact');

Route::get('/products', 'ProductController@products')->name('products');

Route::group(['prefix' => 'admin'], function () {

    Route::get('/', 'AdminPagesController@index')->name('admin.index');
    Route::get('/product/create', 'AdminPagesController@product_create')->name('admin.product.create');
});
