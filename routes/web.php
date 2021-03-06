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

Route::resource('dashboard', 'DashboardController');

Route::get('movie/{id}', 'MovieController@index')->name('movie.index');

Route::get('/', 'HomeController')->name('home');

Route::get('/{letter}', 'HomeController@MoviesWithLetter')->name('home.letter');
