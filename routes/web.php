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

Route::get('intro', 'UsersController@edit')->name('intro');
Route::get('/home', 'HomeController@show')->name('home');
Route::get('allpicture', 'PicturesController@index')->name('allpicture');


Route::group(['middleware' => 'auth'], function () {
    
Route::resource('cameras', 'CamerasController');
Route::resource('pictures', 'PicturesController');
Route::resource('users', 'UsersController', ['only' => ['show','update']]);
Route::resource('choice', 'ChoiceController', ['only' => ['index']]);
});

Route::get('prices', function () {
	return view('price');
	})->name('prices');
	
Route::get('logout','Auth\LoginController@logout')->name('logout.get');
Route::get('borrows/{id}/create','BorrowsController@create')->name('borrows.create');
Route::resource('borrows', 'BorrowsController',['only' => ['show','store','destroy','update','edit','destroy']]);
Route::get('lends/{id}/create','LendsController@create')->name('lends.create');
Route::resource('lends', 'LendsController',['only' => ['show','store','destroy','update','edit','destroy']]);