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

Route::get('/', 'PagesController@index')->name('index');   /*name is for applying a name to the route*/
Route::get('/contact', 'PagesController@contact')->name('contact');
Route::get('/products', 'PagesController@products')->name('products');

//Admin Routes
Route::group(['prefix' => 'admin'], function (){

    Route::get('/', 'AdminPagesController@index')->name('admin.index');


    //Product Routes
    Route::group(['prefix' => '/products'], function (){


        Route::get('/create', 'AdminProductController@create')->name('admin.product.create');
        Route::get('/edit/{id}', 'AdminProductController@edit')->name('admin.product.edit');
        Route::get('/', 'AdminProductController@index')->name('admin.products');
        Route::post('/store', 'AdminProductController@store')->name('admin.product.store');
        Route::post('/update/{id}', 'AdminProductController@update')->name('admin.product.update');
        Route::post('/delete/{id}', 'AdminProductController@delete')->name('admin.product.delete');
    });

});



