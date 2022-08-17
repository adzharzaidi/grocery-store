<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CategoryController;


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

Route::prefix('/product')->as('product.')->group(function(){
    Route::get('/index', 'App\Http\Controllers\ProductController@index')->name('index');
    Route::get('/create', 'App\Http\Controllers\ProductController@create')->name('create');
    Route::post('/store', 'App\Http\Controllers\ProductController@store')->name('store');
    Route::get('/edit/{product}', 'App\Http\Controllers\ProductController@edit')->name('edit');
    Route::post('/update/{product}', 'App\Http\Controllers\ProductController@update')->name('update');
    Route::get('/destroy/{product}', 'App\Http\Controllers\ProductController@destroy')->name('destroy');
});

Route::prefix('category')->as('category.')->group(function(){
    Route::get('/index', 'App\Http\Controllers\CategoryController@index')->name('index');
    Route::get('/create', 'App\Http\Controllers\CategoryController@create')->name('create');
    Route::post('/store', 'App\Http\Controllers\CategoryController@store')->name('store');
    Route::get('/edit/{category}', 'App\Http\Controllers\CategoryController@edit')->name('edit');
    Route::post('/update/{category}', 'App\Http\Controllers\CategoryController@update')->name('update');
    Route::get('/destroy/{category}', 'App\Http\Controllers\CategoryController@destroy')->name('destroy'); 
});





