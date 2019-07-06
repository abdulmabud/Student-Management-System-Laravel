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

// frontEndController for user

Route::get('/','frontEndController@index')->name('frontEnd.home');
Route::get('/noticeboard','frontEndController@notice')->name('frontEnd.notice');
Route::get('/teachers','frontEndController@teachers')->name('frontEnd.teachers');
Route::get('/contact','frontEndController@contact')->name('frontEnd.contact');
Route::get('/about','frontEndController@about')->name('frontEnd.about');


// adminController for admin panel

Route::get('/dashboard', 'adminController@index')->name('admin.dashboard');
Route::get('/class-Schedule', 'adminController@classSchedule')->name('admin.classSchedule');
Route::get('/library', 'adminController@library')->name('admin.library');
Route::get('/teachers', 'adminController@teachers')->name('admin.teachers');
Route::get('/students', 'adminController@students')->name('admin.students');
Route::get('/parents', 'adminController@parents')->name('admin.parents');
Route::get('/assignment', 'adminController@assignment')->name('admin.assignment');
Route::get('/examlist', 'adminController@examlist')->name('admin.examList');
Route::get('/noticeboard', 'adminController@noticeboard')->name('admin.noticeBoard');