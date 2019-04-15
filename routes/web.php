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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/forminput', 'forminputController@index')->name('forminput');
Route::post('/Create', 'forminputController@store')->name('Create');
Route::get('/sewa', 'sewaController@index')->name('sewa');
Route::get('/formpots', 'formpotsController@index')->name('formpots');
Route::get('/formgw', 'formgwController@index')->name('formgw');
