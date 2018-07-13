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

Route::get('/home', 'HomeController@index')->name('home');



Route::group(['middleware' => 'auth'], function () {
    
Route::resource('cameras', 'CamerasController', ['only' => ['index', 'show','store','create']]);
Route::resource('pictures', 'PicturesController', ['only' => ['index','store','create']]);
Route::resource('calendars', 'CalendarController', ['only' => ['show']]);
});
Route::get('prices', function () {
	return view('price');
	})->name('prices');
