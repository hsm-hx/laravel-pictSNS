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
Route::get('/user', 'UserController@index');

// BBSページのルーティング
Route::get('/bbs', 'BbsController@index');
Route::post('/bbs', 'BbsController@create');

Route::get('/hello', 'HelloController@hello');
