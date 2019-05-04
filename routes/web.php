<?php
Auth::routes();
Route::get('/', function () {
    return view('auth.login');
});
Route::get('Dashboard','DashboardController@create')->name('Dashboard');
Route::resource('master-roles', 'Sistem\Master\RoleController');
// Route Master Permission
Route::resource('master-permission', 'Sistem\Master\PermissionController');
//Route Access Roles
Route::resource('access-role', 'Sistem\AccessRoleController');
// Route Access Permission
Route::resource('access-permission', 'Sistem\AccessPermissionController');

//POTS
Route::get('/formpots', 'formpotsController@index')->name('formpots.index')->middleware('permission:Link Pots');
Route::get('/formpots/create', 'formpotsController@create')->name('formpots.create')->middleware('permission:Create Pots');
Route::post('/formpots', 'formpotsController@create')->name('formpots.store')->middleware('permission:Create Pots');



Route::get('/formgw', 'formgwController@index')->name('formgw.index');
Route::get('/formgw/create', 'formgwController@create')->name('formgw.create');
Route::post('/formgw', 'formgwController@store')->name('formgw.store');

Route::get('/formwifi', 'formwifiController@index')->name('formwifi.index');
Route::get('/formwifi/create', 'formwifiController@create')->name('formwifi.create');

Route::get('/self', 'selfController@index')->name('self');

Route::get('/Dashboard','DashboardController@create')->name('Dashboard');

Route::get('/forminput', 'forminputController@index')->name('forminput');

Route::post('/Create', 'forminputController@store')->name('Create');

Route::get('/sewa', 'sewaController@index')->name('sewa');
