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


Route::group(['middleware' => 'web'], function () {
    Route::auth();
    Route::get('/', function () {
        return view('auth.login');
    });

	
	//RESfull
	Route::resource('persyaratan', 'PersyaratanController');
	Route::resource('mahasiswa', 'MahasiswaController');
	Route::resource('jurusan', 'JurusanController');

    Route::get('/home', 'HomeController@index');
});


