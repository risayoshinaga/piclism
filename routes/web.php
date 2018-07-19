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

Route::get('/', 'HomeController@show');

Route::get('sss', function () {
	return view('choice.scene');
})->name('sss');

Route::get('ppp', function () {
	return view('choice.price');
})->name('ppp');


Auth::routes();

Route::get('/home', 'HomeController@show')->name('home');
Route::get('allpicture', 'PicturesController@index')->name('allpicture');


Route::group(['middleware' => 'auth'], function () {
    
Route::resource('cameras', 'CamerasController');
Route::resource('pictures', 'PicturesController');
Route::resource('calendars', 'CalendarController', ['only' => ['show']]);
Route::resource('users', 'UsersController', ['only' => ['show']]);
Route::resource('choice', 'ChoiceController', ['only' => ['index']]);
});

Route::get('prices', function () {
	return view('price');
	})->name('prices');
	
Route::get('logout','Auth\LoginController@logout')->name('logout.get');
