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
Route::get('admin/listsocial','AdminController@listsocial');
Route::get('admin/addsocial','AdminController@addsocial');
Route::get('admin/addnews','AdminController@addnews');
Route::get('admin/listnews','AdminController@listnews');
Route::get('admin/socialsetting','AdminController@socialsetting');
Route::get('admin/newssetting','AdminController@newssetting');

Route::get('admin/addnewsocial','AdminController@addnewsocial');
Route::post('admin/addnewsocial','AdminController@addnewsocial')->name('addnewsocial');


Route::get('admin/addnewfanpage','AdminController@addnewfanpage');
Route::post('admin/addnewfanpage','AdminController@addnewfanpage')->name('addnewfanpage');