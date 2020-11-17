<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
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
    return view('landing-page');
});

Auth::routes();

Route::get('/account/{userId}/{userVerificationToken}/activate', 'Auth\AccountController@verifyToken');
Route::get('/account/waiting-verification', 'Auth\AccountController@waitingVerification');
Route::post('/account/resend-verification', 'Auth\AccountController@resendVerification');

Route::get('/account/forgot-password', 'Auth\AccountController@forgotPassword')->name('forgot.password');
Route::post('/account/forgot-password', 'Auth\AccountController@sendEmailForgotPassword')->name('forgot.password');
Route::get('/account/{resetVerificationToken}/forgot-password', 'Auth\AccountController@verifyForgotToken');
Route::post('/account/reset-password', 'Auth\AccountController@updatePassword')->name('password-reset');

//Route untuk register teacher dan staff

Route::get('/select-registration', 'Auth\RegisterController@selectRegistration');
Route::get('/register-student', 'Auth\RegisterController@registerStudent');
Route::get('/register-teacher', 'Auth\RegisterController@registerTeacher');
Route::get('/register-staff', 'Auth\RegisterController@registerStaff');

//Route Untuk Admin, Student, Teacher, Staff TU, jika register dan login maka akan ke halaman ini 
Route::group(['middleware' => ['auth', 'verified', 'DisablePreventBack']], function () {
    Route::get('/dashboard', 'User\UserController@index')->name('dashboard.users');
    Route::get('/create', 'User\UserController@create');


    Route::get('/staffs', 'StaffController@index');
    Route::get('/staffs/prospective', 'StaffController@list_prospective');
    Route::get('/staffs/rejected', 'StaffController@list_rejected');
    Route::get('staffs/create', 'StaffController@create');
    Route::get('/staff/1', 'StaffController@show');

    Route::get('/teachers', 'TeacherController@index');
    Route::get('/teachers/prospective', 'TeacherController@list_prospective');
    Route::get('/teachers/rejected', 'TeacherController@list_rejected');
    Route::get('/teachers/create', 'TeacherController@create');
    Route::get('/teacher/1', 'TeacherController@show');

    Route::get('/students', 'StudentController@index');
    Route::get('/students/prospective', 'StudentController@list_prospective');
    Route::get('/students/rejected', 'StudentController@list_rejected');
    Route::get('/students/create', 'StudentController@create');
    Route::get('/student/1', 'StudentController@show');


    Route::get('/page/list', 'PageController@index');
    Route::get('/page/detail', 'PageController@show');
    Route::get('/page/add', 'PageController@create');
    Route::get('/page/edit', 'PageController@edit');
});
