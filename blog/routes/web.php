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

//新規作成画面
Route::get('/posts/create', 'PostController@create');

//編集画面
Route::get('/posts/{post}/edit', 'PostController@edit');

Route::put('/posts/{post}', 'PostController@update');

//削除の設定
Route::delete('/posts/{post}', 'PostController@delete');



//詳細画面
Route::get('/posts/{post}', 'PostController@show');

Route::post('/posts','PostController@store');




