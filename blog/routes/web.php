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
//ブログ一覧画面
Route::get('/', 'PostController@index');

//詳細画面
Route::get('/posts/{post}', 'PostController@show');

//新規作成画面
Route::get('/post/create', 'PostController@create');

Route::post('/posts','PostController@store');

//編集画面
Route::get('/posts/{post}/edit', 'PostController@edit');
Route::put('/posts/{post}', 'PostController@update');

