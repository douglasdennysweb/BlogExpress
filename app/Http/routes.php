<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::group(['prefix' => 'admin'], function() {
    Route::group(['prefix' => 'categories'], function() {
        Route::get('', ['as' => 'admin.categories.index', 'uses' => 'AdminCategoriesController@index']);
        Route::post('create', ['as' => 'admin.categories.create', 'uses' => 'AdminCategoriesController@create']);
        Route::put('edit/{id}', ['as' => 'admin.categories.edit', 'uses' => 'AdminCategoriesController@edit']);
        Route::delete('delete/{id}', ['as' => 'admin.categories.delete', 'uses' => 'AdminCategoriesController@delete']);
    });
    Route::group(['prefix' => 'products'], function() {
        Route::get('', ['as' => 'admin.products.index', 'uses' => 'AdminProductsController@index']);
        Route::post('create', ['as' => 'admin.products.create', 'uses' => 'AdminProductsController@create']);
        Route::get('edit/{id}', ['as' => 'admin.products.edit', 'uses' => 'AdminProductsController@edit']);
        Route::get('delete/{id}', ['as' => 'admin.products.delete', 'uses' => 'AdminProductsController@delete']);
    });
});