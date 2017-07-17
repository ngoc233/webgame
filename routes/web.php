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
Route::group(['prefix' =>'admin','middleware' =>'adminLogin'],function()
{
	Route::resource('menu','MenuController');
	Route::resource('cate','CateController');
	Route::resource('post','PostController');
	Route::resource('sever','SeverController');
	Route::resource('about','AboutController');
	Route::resource('slider','SliderController');
});
Route::get('admin/login','LoginController@getLogin');
Route::post('admin/login','LoginController@postLogin');
Route::get('admin/logout','LoginController@logout');