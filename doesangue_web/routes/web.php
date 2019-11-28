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



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home')->middleware('auth');

Route::get('/logout', 'HomeController@logout')->name('logout')->middleware('auth');


Route::group(['middleware' => 'auth'], function () {
	Route::get('table-list', function () {
		return view('pages.table_list');
	})->name('table');

	Route::get('typography', function () {
		return view('pages.typography');
	})->name('typography');

	Route::get('icons', function () {
		return view('pages.icons');
	})->name('icons');

	Route::get('map', function () {
		return view('pages.map');
	})->name('map');

	Route::get('notifications', function () {
		return view('pages.notifications');
	})->name('notifications');

	Route::get('rtl-support', function () {
		return view('pages.language');
	})->name('language');

	Route::get('upgrade', function () {
		return view('pages.upgrade');
	})->name('upgrade');
});

Route::group(['middleware' => 'auth'], function () {
	Route::resource('user', 'UserController', ['except' => ['show']]);

	Route::get('profile', ['as' => 'profile.edit', 'uses' => 'ProfileController@edit']);

	

	Route::put('profile', ['as' => 'profile.update', 'uses' => 'ProfileController@update']);
	
	Route::put('profile/password', ['as' => 'profile.password', 'uses' => 'ProfileController@password']);
});



Route::prefix('doador')->group(function(){

	Route::get('/login', 'Auth\DoadorLoginController@showLoginForm')->name('doador.login');


	Route::post('/login', 'Auth\DoadorLoginController@login')->name('doador.login.submit');

	Route::get('/', 'DoadorController@index')->name('doador.dashboard');

	Route::get('/profile', ['as' => 'profileDoador.edit', 'uses' => 'DoadorController@doador_edit']);

	// Route::get('/bancosDeSangue', ['as' => 'pagesDoadores.index', 'uses' => 'DoadorController@indexBanco']);

	Route::get('/bancosDeSangue', ['as' => 'pagesDoadores.index', 'uses' => 'DoadorController@indexBanco']);

	Route::get('/bancosDeSangue/cadastro', ['as' => 'pagesDoadores.novoBanco', 'uses' => 'DoadorController@novoBanco']);



	Route::put('profile', ['as' => 'profile.update', 'uses' => 'DoadorController@update']);

	// Route::post('profile', 'DoadorController@update')->name('profile.update');
	
	Route::put('profile/password', ['as' => 'profile.password', 'uses' => 'DoadorController@password']);


});

