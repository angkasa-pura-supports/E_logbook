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
Route::get('/', function () {
    return view('auth.login');
});

Route::get('/Dashboard','DashboardController@create')->name('Dashboard');
Route::get('/forminput', 'forminputController@index')->name('forminput');
Route::post('/Create', 'forminputController@store')->name('Create');
Route::get('/sewa', 'sewaController@index')->name('sewa');
Route::get('/formpots', 'formpotsController@index')->name('formpots');
Route::get('/formgw', 'formgwController@index')->name('formgw');
Route::get('/formwifi', 'formwifiController@index')->name('formwifi');
