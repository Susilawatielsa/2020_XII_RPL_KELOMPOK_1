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
Route::get('/logout', function(){
    abort(404);
});

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
    Route::post('/staffs/create', 'StaffController@store');
    Route::get('/staffs/create', 'StaffController@create');
    Route::get('/staff/1', 'StaffController@show');
    Route::get('/staffs/prospective/1', 'StaffController@show_prospective');
    Route::get('/staffs/rejected/1', 'StaffController@show_rejected');
    Route::get('/staffs/edit/1', 'StaffController@edit');
    Route::post('/staffs/edit/1', 'StaffController@update');
    Route::get('/staffs/delete/1', 'StaffController@destroy');
    Route::get('/staff-registration', 'StaffController@formRegistrasion');
    Route::post('/staff-registration', 'StaffController@storeFormRegistrasion');


    Route::get('/teachers', 'TeacherController@index');
    Route::get('/teachers/prospective', 'TeacherController@list_prospective');
    Route::get('/teachers/rejected', 'TeacherController@list_rejected');
    Route::get('/teachers/create', 'TeacherController@create');
    Route::post('/teachers/create', 'TeacherController@store');
    Route::get('/teacher/1', 'TeacherController@show');
    Route::get('/teachers/prospective/1', 'TeacherController@show_prospective');
    Route::get('/teachers/rejected/1', 'TeacherController@show_rejected');
    Route::get('/teachers/edit/1', 'TeacherController@edit');
    Route::get('/teachers/delete/1', 'TeacherController@destroy');
    Route::get('/teacher-registration', 'TeacherController@formRegistrasion');
    Route::post('/teacher-registration', 'TeacherController@storeFormRegistrasion');


    Route::get('/students', 'StudentController@index');
    Route::get('/students/prospective', 'StudentController@list_prospective');
    Route::get('/students/rejected', 'StudentController@list_rejected');
    Route::get('/students/create', 'StudentController@create');
    Route::post('/students/create', 'StudentController@store');
    Route::get('/student/1', 'StudentController@show');
    Route::get('/students/prospective/1', 'StudentController@show_prospective');
    Route::get('/students/rejected/1', 'StudentController@show_rejected');
    Route::get('/students/edit/1', 'StudentController@edit');
    Route::get('/students/delete/1', 'StudentController@destroy');
    Route::get('/student-registration', 'StudentController@formRegistrasion');
    Route::post('/student-registration', 'StudentController@storeFormRegistrasion');

    Route::get('/page/list', 'PageController@index');
    Route::get('/page/detail', 'PageController@show');
    Route::get('/page/add', 'PageController@create');
    Route::get('/page/edit', 'PageController@edit');

    Route::get('/account/profile/1/edit-password', 'Auth\AccountController@editPassword');
    Route::post('/account/profile/1/edit-password', 'Auth\AccountController@storeEditPassword');

    Route::get('/account/profile/1/edit', 'Auth\AccountController@editProfile');
    Route::post('/account/profile/1/edit', 'Auth\AccountController@storeEditProfile');
});

Route::group(['middleware' => ['auth', 'verified', 'DisablePreventBack', 'role:admin|staff']], function () {
    Route::get('/school-years', 'YearController@index');
    Route::get('/school-years/create', 'YearController@create');
    Route::post('/school-years/create', 'YearController@store');
    Route::get('/school-years/edit/1', 'YearController@edit');
    Route::post('/school-years/edit/1', 'YearController@update');
    Route::get('/school-years/delete', 'YearController@destroy');

    Route::get('/majors', 'MajorController@index');
    Route::get('/majors/create', 'MajorController@create');
    Route::post('/majors/create', 'MajorController@store');
    Route::get('/majors/edit/1', 'MajorController@edit');
    Route::post('/majors/edit/1', 'MajorController@update');
    Route::get('/majors/delete', 'MajorController@destroy');

    Route::get('/subjects', 'SubjectController@index');
    Route::get('/subjects/create', 'SubjectController@create');
    Route::post('/subjects/create', 'SubjectController@store');
    Route::get('/subjects/edit/1', 'SubjectController@edit');
    Route::post('/subjects/edit/1', 'SubjectController@update');
    Route::get('/subjects/delete', 'SubjectController@destroy');

    Route::get('/position-types', 'PositionTypeController@index');
    Route::get('/position-types/create', 'PositionTypeController@create');
    Route::post('/position-types/create', 'PositionTypeController@store');
    Route::get('/position-types/edit/1', 'PositionTypeController@edit');
    Route::post('/position-types/edit/1', 'PositionTypeController@update');
    Route::get('/position-types/delete', 'PositionTypeController@destroy');

    
});
