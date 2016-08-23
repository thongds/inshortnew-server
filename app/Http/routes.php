<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('users/user',['name'=>'Thong is the boss']);
});
Route::get('/user/{id}','UserController@showProfile');
Route::get('/insert/{email}','UserController@insertUser');

/* admin route */

Route::get('admin','AdminController@index');
Route::post('admin/login','AdminController@login')->name('admin');
Route::get('admin/login','AdminController@login')->name('admin');
Route::get('admin/social','AdminController@social');
Route::get('admin/news','AdminController@news');