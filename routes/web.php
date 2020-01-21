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
    return view('article.index');
});

Auth::routes();

Route::get('/', 'ArticlesController@index')->name('article.index');

Route::post('/article', 'ArticlesController@store')->name('article.store');
Route::get('/article/create', 'ArticlesController@create')->name('article.create');
Route::get('/article/{id}', 'ArticlesController@show');
Route::get('/comment/create/{article_id}', 'CommentsController@create');
Route::post('/comment', 'CommentsController@store')->name('comment.store');