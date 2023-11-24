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


/*
general routes
*/

Auth::routes();

Route::get('/get/page/{id}','FrontendController@get_single')->name('get/page');
Route::get('/', 'FrontendController@index')->name('blog');
Route::post('/login', 'LoginController@login')->name('login');


/*
Routes only accessible for admin
*/

Route::middleware(['auth'])->group( function(){
    Route::post('/posts/add', 'PostsController@add')->name('posts/add');
    Route::get('/posts/add', 'PostsController@create')->name('posts/add');
    Route::get('/home', 'PostsController@view')->name('home');
    Route::get('posts/view', 'PostsController@view')->name('posts/view');
    Route::post('posts/modify', 'PostsController@modify')->name('posts/modify');
    Route::post('posts/edit', 'PostsController@edit')->name('posts/edit');
    Route::get('posts/edit', 'PostsController@modify')->name('posts/edit');


});

