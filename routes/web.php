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



Auth::routes();

Route::get('/', function () {
    return view('auth/login')->name('login');
});



Route::group(['prefix' => '/', 'middleware' => ['auth']], function () {
	Route::get('/', 'HomeController@index');
	Route::resource('user', 'UserController');
	Route::get('/perfil', ['as' => 'user.perfil', 'uses' => 'UserController@perfil']);
	Route::get('user/delete/{id}', ['uses' => 'UserController@destroy', 'as' => 'user.destroy']);
});
