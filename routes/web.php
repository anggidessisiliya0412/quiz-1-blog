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

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/category', 'CategoryController@index');
Route::get('/post', 'PostController@index');
Route::get('/photo', 'PhotosController@index');
Route::get('/album', 'AlbumController@index');

Route::get('/category/create', 'CategoryController@create');
Route::post('/category', 'CategoryController@store');

Route::get('/post/create', 'PostController@create');
Route::post('/post', 'PostController@store');

Route::get('/photo/create', 'PhotosController@create');
Route::post('/photo', 'PhotosController@store');

Route::get('/album/create', 'AlbumController@create');
Route::post('/album', 'AlbumController@store');

Route::delete('category/{id}', 'CategoryController@destroy');
Route::delete('post/{id}', 'PostController@destroy');
Route::delete('photo/{id}', 'PhotosController@destroy');
Route::delete('album/{id}', 'AlbumController@destroy');

Route::get('category/{id}/edit', 'CategoryController@edit');
Route::Patch('category/{id}', 'CategoryController@update');

Route::get('post/{id}/edit', 'PostController@edit');
Route::Patch('post/{id}', 'PostController@update');

Route::get('photo/{id}/edit', 'PhotosController@edit');
Route::Patch('photo/{id}', 'PhotosController@update');

Route::get('album/{id}/edit', 'AlbumController@edit');
Route::Patch('album/{id}', 'AlbumController@update');

