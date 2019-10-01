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

Route::group(['prefix'=>'admin','namespace'=>'Admin'],function() {
    Route::get('/', ['as' => 'admin-index', 'uses' => 'CategoryController@getIndexAdmin']);

    Route::group(['prefix' => 'danh-muc'], function () {

        Route::get("them", ['as' => 'themdanhmuc', 'uses' => 'CategoryController@getAddCate']);

        Route::post("them", ['as' => 'themdanhmuc', 'uses' => 'CategoryController@postAddCate']);

        Route::get("danh-sach",['as'=>'listdanhmuc','uses'=>'CategoryController@getListCate']);

        Route::get("sua/{id}",['as'=>'suadanhmuc','uses'=>'CategoryController@getEditCate']);

        Route::post("sua/{id}",['as'=>'suadanhmuc','uses'=>'CategoryController@postEditCate']);

        Route::get('xoa/{id}',"CategoryController@getDelCate");
    });

    Route::group(['prefix'=>'san-pham'],function () {

        Route::get("danh-sach",['as' => 'listsanpham', 'uses' => "ProductController@getListProduct"]);

    });
});





