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

Auth::routes();

Route::get('/', 'HomeController@index')->name('dashboard');

Route::resource('/employee', 'EmployeeController');

Route::resource('/division', 'DivisionController');

Route::resource('/grade', 'GradeController');

Route::resource('/profile', 'ProfileController');

Route::resource('/salary', 'SalaryController');


Route::resource('/print', 'PrintController');