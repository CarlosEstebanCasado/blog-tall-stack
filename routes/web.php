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

/*Route::get('/', function () {
    return view('welcome');
});*/

Route::get('/', 'App\\Http\\Controllers\\BlogController@index')->name('home-blog');

Route::get('/category/{id}', 'App\\Http\\Controllers\\BlogController@getPostsCategory')->name('category');

Route::get('/post/{id}', 'App\\Http\\Controllers\\BlogController@showPost')->name('post');


Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::resource('posts', 'App\\Http\\Controllers\\PostController');

Route::resource('categories', 'App\\Http\\Controllers\\CategoryController');