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
Route::get('/patient', 'PatientController@dashboard');
Route::get('/patient/prescription', 'PatientController@prescription');
Route::get('/patient/appointment', 'PatientController@appointment');
Route::get('/patient/report', 'PatientController@report');
Route::get('/patient/profile', 'PatientController@profile');


Route::view('/signin', 'signin');


