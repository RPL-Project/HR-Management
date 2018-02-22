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

Route::get('/', function () {
    return view('welcome');
});

//Auth
Route::get('/auth/register','AuthController@getRegister')->name('auth.register')->middleware('guest');
Route::post('/auth/register','AuthController@postRegister')->middleware('guest');

Route::get('/auth/login','AuthController@getLogin')->middleware('guest')->name('auth.login');
Route::post('/auth/login','AuthController@postLogin')->middleware('guest');

Route::get('/auth/layout', function () {
    return view('/auth/layout');
})->middleware('auth')->name('auth.layout');

Route::get('/auth/logout','AuthController@logout')->middleware('auth')->name('auth.logout');