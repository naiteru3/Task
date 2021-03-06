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


Route::group(['prefix' => 'admin'], function() {
    Route::get('news/create', 'Admin\NewsController@add');
});


/*課題　３
Route::get( 'admin','Admin\AAAController@bbb');
　課題　４
Route::get('admin/news/create', 'Admin\ProfileController@add');

Route::get('admin/news/create', 'Admin\ProfileController@edit');
*/