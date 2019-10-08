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
// Route::get('/noticeboard','frontEndController@notice')->name('frontEnd.notice');
// Route::get('/teachers','frontEndController@teachers')->name('frontEnd.teachers');
// Route::get('/contact','frontEndController@contact')->name('frontEnd.contact');
// Route::get('/about','frontEndController@about')->name('frontEnd.about');


// adminController for admin panel

Route::get('/dashboard', 'adminController@index')->name('admin.dashboard');
Route::get('/class-Schedule', 'adminController@classSchedule')->name('admin.classSchedule');



Route::get('/parents', 'adminController@parents')->name('admin.parents');
Route::get('/assignment', 'adminController@assignment')->name('admin.assignment');
Route::get('/examlist', 'adminController@examlist')->name('admin.examList');
Route::get('/noticeboard', 'adminController@noticeboard')->name('admin.noticeBoard');


// adminController for library 
Route::get('/library', 'adminController@library')->name('admin.library');
Route::get('/library/add', 'adminController@libraryAdd')->name('admin.library.add');
Route::post('/library/added', 'adminController@libraryAdded')->name('admin.library.added');
Route::get('/library/edit/{id}', 'adminController@libraryEdit')->name('admin.library.edit');
Route::post('/library/update/{id}', 'adminController@libraryUpdate')->name('admin.library.update');
Route::delete('/library/delete/{id}', 'adminController@libraryDelete')->name('admin.library.delete');


// adminController for student 
Route::get('/student', 'adminController@students')->name('admin.students');
Route::get('/student/add', 'adminController@studentAdd')->name('admin.student.add');
Route::post('/student/add', 'adminController@studentAdded')->name('admin.student.add');


// adminController for teacher 
Route::get('/teacher', 'adminController@teachers')->name('admin.teachers');
Route::get('/teacher/add', 'adminController@teacherAdd')->name('admin.teacher.add');
Route::post('/teacher/add', 'adminController@teacherAdded')->name('admin.teacher.add');
Route::get('/teacher/details/{id}', 'adminController@teacherDetails')->name('admin.teacher.details');


// adminController for class 
Route::get('/classlist', 'adminController@classList')->name('admin.class');
Route::get('/class-details/{id}', 'adminController@classDetails')->name('admin.class.details');
Route::get('/class/add', 'adminController@classAdd')->name('admin.class.add');
Route::post('/class/add', 'adminController@classAdded')->name('admin.class.add');
Route::get('/class/edit/{id}', 'adminController@classEdit')->name('admin.class.edit');
Route::post('/class/update/{id}', 'adminController@classUpdate')->name('admin.class.update');
Route::delete('/class/delete/{id}','adminController@classDelete')->name('admin.class.delete');