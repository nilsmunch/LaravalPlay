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

/* GAMER */
if (in_array($_SERVER['SERVER_NAME'], ['players.playpylon.com'])) {

Route::get('/', function () {return view('gamer/welcome');});
Route::get('/about', function () {return view('gamer/about');});

} else {

Route::get('/', function () {return view('welcome');});
Route::get('/about', function () {return view('about');});

}


/* NORMAL */

Route::get('/publisher', function () {return view('welcome');});
Route::get('/publishers', function () {return view('welcome');});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
