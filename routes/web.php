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

Route::get('/', 'Frontend\PagesController@index')->name('index');   /*name is for applying a name to the route*/
Route::get('/contact', 'Frontend\PagesController@contact')->name('contact');

//Product Routes
Route::get('/products', 'Frontend\ProductsController@index')->name('products');
Route::get('/product/{slug}', 'Frontend\ProductsController@show')->name('products.show');

//Admin Routes
Route::group(['prefix' => 'backend'], function (){

    Route::get('/', 'Backend\PagesController@index')->name('backend.index');


    //Product Routes
    Route::group(['prefix' => '/products'], function (){

        Route::get('/', 'Backend\ProductsController@index')->name('backend.products');
        Route::get('/create', 'Backend\ProductsController@create')->name('backend.product.create');
        Route::get('/edit/{id}', 'Backend\ProductsController@edit')->name('backend.product.edit');
        Route::post('/store', 'Backend\ProductsController@store')->name('backend.product.store');
        Route::post('/update/{id}', 'Backend\ProductsController@update')->name('backend.product.update');
        Route::post('/delete/{id}', 'Backend\ProductsController@delete')->name('backend.product.delete');
    });

    //Category Routes
    Route::group(['prefix' => '/categories'], function (){

        Route::get('/', 'Backend\CategoriesController@index')->name('backend.categories');
        Route::get('/create', 'Backend\CategoriesController@create')->name('backend.category.create');
        Route::get('/edit/{id}', 'Backend\CategoriesController@edit')->name('backend.category.edit');
        Route::post('/store', 'Backend\CategoriesController@store')->name('backend.category.store');
        Route::post('/category/update/{id}', 'Backend\CategoriesController@update')->name('backend.category.update');
        Route::post('/category/delete/{id}', 'Backend\CategoriesController@delete')->name('backend.category.delete');
    });

});



