<?php

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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::prefix('home')->group(function(){
    Route::get('/', 'HomeController@index')->name('home');
    Route::get('/logout', 'Auth\LoginController@userLogout')->name('user.logout');
});

Route::prefix('admin')->group(function(){
    Route::get('/login', 'AdminLoginController@showLoginForm')->name('admin.login');
    Route::post('/login', 'AdminLoginController@login')->name('admin.login.submit');
    Route::get('/logout', 'AdminLoginController@logout')->name('admin.logout');
    Route::get('/', 'AdminController@index')->name('admin');
});

Route::prefix('/news-feed')->group(function(){
    Route::post('/post', 'PostController@store')->name('post.store');
    Route::get('/like/{id}', 'LikeController@store')->name('like.store');
});

Route::prefix('/product')->group(function(){
    Route::get('/', 'ProductController@index')->name('product.index');
    Route::get('/create', 'ProductController@create')->name('product.create');
    Route::post('/store', 'ProductController@store')->name('product.store');
    Route::get('/edit/{id}', 'ProductController@edit')->name('product.edit');
    Route::put('/update/{id}', 'ProductController@update')->name('product.update');
    Route::delete('/delete/{id}', 'ProductController@destroy')->name('product.delete');
    Route::get('/show/{id}', 'ProductController@show')->name('product.show');
});

