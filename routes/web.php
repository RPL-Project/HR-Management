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
Route::get('/auths/register','AuthController@getRegister')->name('auths.register')->middleware('guest');
Route::post('/auths/register','AuthController@postRegister')->middleware('guest');

Route::get('/auths/login','AuthController@getLogin')->middleware('guest')->name('auths.login');
Route::post('/auths/login','AuthController@postLogin')->middleware('guest');

Route::get('/auths/layout', function () {
    return view('/auths/layout');
})->middleware('auth')->name('auths.layout');

Route::get('/auths/logout','AuthController@logout')->middleware('auth')->name('auths.logout');