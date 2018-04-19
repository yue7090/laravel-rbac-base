<?php
Route::get('/backend/login', 'Modules\Backend\Http\Controllers\LoginController@index')->middleware('web');
Route::post('/backend/doLogin', 'Modules\Backend\Http\Controllers\LoginController@doLogin')->middleware('web');

Route::group(['middleware' => ['web', 'permission'], 'prefix' => 'backend', 'namespace' => 'Modules\Backend\Http\Controllers'], function()
{
    Route::get('/', 'BackendController@index');
    Route::get('/loginOut', 'LoginController@loginOut');
    Route::resource('/user', 'UserController');
    Route::resource('/role', 'RoleController');
    Route::resource('/menu', 'MenuController');
    Route::post('/menu/order', 'MenuController@order');
    Route::resource('/permission', 'PermissionController');
    Route::post('/permission/order', 'PermissionController@order');
});
