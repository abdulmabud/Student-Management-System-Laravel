<?php

use App\Http\Controllers\adminController;
use App\Http\Controllers\adminAuthController;
use App\Http\Controllers\frontEndController;
use App\Http\Controllers\NoticeController;
use App\Http\Controllers\CourseController;
use Illuminate\Support\Facades\Route;

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
Route::get('/', [frontEndController::class, 'index'])->name('frontEnd.home');
Route::get('/noticeboard/{id}', [frontEndController::class, 'viewnotice'])->name('view.notice');
// Route::get('/noticeboard','frontEndController@notice'])->name('frontEnd.notice');
// Route::get('/teachers','frontEndController@teachers'])->name('frontEnd.teachers');
// Route::get('/contact','frontEndController@contact'])->name('frontEnd.contact');
// Route::get('/about','frontEndController@about'])->name('frontEnd.about');


// adminController for admin panel

Route::get('/dashboard', [adminController::class, 'index'])->name('admin.dashboard');
Route::get('/class-schedule', [adminController::class, 'classSchedule'])->name('admin.classSchedule');
Route::get('/login', [adminAuthController::class, 'showLogin'])->name('admin.login');
Route::post('/login', [adminAuthController::class, 'login'])->name('admin.login');
Route::get('/logout', [adminAuthController::class, 'logout'])->name('admin.logout');




Route::get('/assignment', [adminController::class, 'assignment'])->name('admin.assignment');
Route::get('/examlist', [adminController::class, 'examlist'])->name('admin.examList');


// Student Attendance system

Route::get('/attendance', [adminController::class, 'attend'])->name('admin.attendance');
Route::post('/attendance', [adminController::class, 'attendList'])->name('admin.attendance');
Route::post('/save-attendacne', [adminController::class, 'saveAttendance'])->name('admin.save.attendance');


// adminController for library 
Route::get('/library', [adminController::class, 'library'])->name('admin.library');
Route::get('/library/add', [adminController::class, 'libraryAdd'])->name('admin.library.add');
Route::post('/library/added', [adminController::class, 'libraryAdded'])->name('admin.library.added');
Route::get('/library/edit/{id}', [adminController::class, 'libraryEdit'])->name('admin.library.edit');
Route::post('/library/update/{id}', [adminController::class, 'libraryUpdate'])->name('admin.library.update');
Route::delete('/library/delete/{id}', [adminController::class, 'libraryDelete'])->name('admin.library.delete');
Route::get('/library/cal', [adminController::class, 'calLibrary'])->name('admin.library.cal');


// adminController for student 
Route::get('/student', [adminController::class, 'students'])->name('admin.students');
Route::get('/student/add', [adminController::class, 'studentAdd'])->name('admin.student.add');
Route::post('/student/add', [adminController::class, 'studentAdded'])->name('admin.student.add');
Route::get('/student/details/{id}', [adminController::class, 'studentDetails'])->name('admin.student.details');
Route::get('/student/edit/{id}', [adminController::class, 'studentEdit'])->name('admin.student.edit');
Route::post('/student/update/{id}', [adminController::class, 'studentUpdate'])->name('admin.student.update');
Route::delete('/student/delete/{id}', [adminController::class, 'studentDelete'])->name('admin.student.delete');

Route::get('/student/cal', [adminController::class, 'studentCal'])->name('admin.student.cal');

// adminController for teacher 
Route::get('/teacher', [adminController::class, 'teachers'])->name('admin.teachers');
Route::get('/teacher/add', [adminController::class, 'teacherAdd'])->name('admin.teacher.add');
Route::post('/teacher/add', [adminController::class, 'teacherAdded'])->name('admin.teacher.add');
Route::get('/teacher/details/{id}', [adminController::class, 'teacherDetails'])->name('admin.teacher.details');
Route::get('/teacher/edit/{id}', [adminController::class, 'teacherEdit'])->name('admin.teacher.edit');
Route::post('/teacher/update/{id}', [adminController::class, 'teacherUpdate'])->name('admin.teacher.update');
Route::delete('/teacher/delete/{id}', [adminController::class, 'teacherDelete'])->name('admin.teacher.delete');
Route::get('/teacher/cal', [adminController::class, 'calTeacher'])->name('admin.tecacher.cal');


// adminController for class 
Route::get('/classlist', [adminController::class, 'classList'])->name('admin.class');
Route::get('/class-details/{id}', [adminController::class, 'classDetails'])->name('admin.class.details');
Route::get('/class/add', [adminController::class, 'classAdd'])->name('admin.class.add');
Route::post('/class/add', [adminController::class, 'classAdded'])->name('admin.class.add');
Route::get('/class/edit/{id}', [adminController::class, 'classEdit'])->name('admin.class.edit');
Route::post('/class/update/{id}', [adminController::class, 'classUpdate'])->name('admin.class.update');
Route::delete('/class/delete/{id}',[adminController::class, 'classDelete'])->name('admin.class.delete');


Route::get('/notice/cal', [NoticeController::class, 'calNotice'])->name('notice.cal');


// Resource Controller 

// Route::resource('course', 'CourseController');
Route::resources([
    'course' => CourseController::class,
    'notice' => NoticeController::class
]);

