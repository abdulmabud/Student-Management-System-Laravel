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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/','frontEndController@index')->name('frontEnd.home');
Route::get('/noticeboard','frontEndController@notice')->name('frontEnd.notice');
Route::get('/teachers','frontEndController@teachers')->name('frontEnd.teachers');
Route::get('/contact','frontEndController@contact')->name('frontEnd.contact');
Route::get('/about','frontEndController@about')->name('frontEnd.about');