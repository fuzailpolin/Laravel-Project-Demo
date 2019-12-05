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

Route::get('/login', 'LoginController@index')->name('login');
Route::post('/login', 'LoginController@verify');
Route::get('logout', 'LogoutController@index');


Route::group(['middleware'=>['sess']], function(){
	
	//admin home view
	
	Route::get('/adminHome', 'adminController@index')->name('admin.index');
	
	
	//customer home view
	Route::get('/home', 'homeController@index')->name('home.index');
	Route::get('/home/gallary', 'homeController@gallary')->name('home.gallary');
	Route::get('/home/about', 'homeController@about')->name('home.about');
	Route::get('/home/upload', 'homeController@pictureUpload')->name('home.upload');
	
	
});