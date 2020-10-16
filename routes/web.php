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

Route::get('/', 'App\\Http\\Livewire\\Blog\\Index')->name('home-blog');

Route::get('/all-categories', 'App\\Http\\Controllers\\BlogController@getCategories')->name('show-categories');

Route::get('/category/{id}', 'App\\Http\\Controllers\\BlogController@getPostsCategory')->name('category');

Route::get('/post/{id}', 'App\\Http\\Controllers\\BlogController@showPost')->name('post');


Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::get('/posts/create','App\\Http\\Livewire\\Posts\\Create')->name('create-post');

Route::resource('posts', 'App\\Http\\Controllers\\PostController')->except([
    'create'
]);

Route::resource('categories', 'App\\Http\\Controllers\\CategoryController');