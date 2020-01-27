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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/admin','AdminController@index')->name('admin.home');
Route::get('/product_category','ProductController@productcategory')->name('admin.product.category');
Route::get('/productcategorydata','ProductController@productcategorydata')->name('admin.product.category.data');

Route::post('/add_category','ProductController@addproductcategory')->name('admin.add.category');
Route::get('/product','ProductController@product')->name('admin.product.list');
Route::post('/productstore','ProductController@store');
Route::get('/stock','StockController@index')->name('admin.stock.index');
Route::get('/getproduct','StockController@getproduct');
Route::post('/sendstock','StockController@sendstock');
Route::get('/sellproduct','SellController@index')->name('admin.sell.product');



Route::get('/form','StockController@form')->name('admin.stock.form');
