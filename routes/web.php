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
//Admin  Routes
Route::get('/admin','AdminController@dashboard');
Route::get('/admin/doctor','AdminController@doctor');
Route::get('/admin/patient','AdminController@patient');
Route::get('/admin/nurse','AdminController@nurse');
Route::get('/admin/laboratorist','AdminController@lab');
Route::get('/admin/record-officer','AdminController@recordOfficer');
Route::get('/admin/bed','AdminController@bed');
Route::get('/admin/profile','AdminController@profile');


//Doctor Routes
Route::get('/doctor','DoctorController@dashboard');
Route::get('/doctor/appointment','DoctorController@appointment');
Route::get('/doctor/patient','DoctorController@patient');
Route::get('/doctor/prescription','DoctorController@prescription');
Route::get('/doctor/report','DoctorController@report');
Route::get('/doctor/profile','DoctorController@profile');


// Patient Routes
Route::get('/patient', 'PatientController@dashboard');
Route::get('/patient/prescription', 'PatientController@prescription');
Route::get('/patient/appointment', 'PatientController@appointment');
Route::get('/patient/report', 'PatientController@report');
Route::get('/patient/profile', 'PatientController@profile');


Route::view('/', 'auth/signin');
Route::view('/signup', 'auth/signup');
Route::view('/create-profile', 'create-profile');


