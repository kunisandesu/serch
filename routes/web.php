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


//検索結果を表示する
Route::get('/serch','UsersController@serch');

//ユーザー一覧と検索画面
Route::get('/','UsersController@index');


//Route::get('/', function () {
//    return view('welcome');
//});
