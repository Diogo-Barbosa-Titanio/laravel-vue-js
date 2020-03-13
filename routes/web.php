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

//Front
Route::get('/post', 'Blog\Front\PostController@index');

//Admin
Route::get('admin/post', 'Blog\Admin\PostController@index');

//Auth
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
