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
Route::get('/register','UserController@register')->name('display-register-page');
Route::post('/add-user-data','UserController@addUserData')->name('add-user-data');
//login
Route::get('/login','UserController@login')->name('display-login-page');
Route::post('/check-login','UserController@doLogin')->name('check-login');
//test
Route::get('/emp','UserController@empdData')->name('display-empdata-page');
//userdata
Route::get('/userdata','UserController@index')->name('display-userdata');

//logout
Route::get('/logout','DashboardController@logout')->name('logout');
Route::get('/rollbartest','UserController@checkRollbar')->name('rollbar');


Route::group(['prefix' => 'admin',  'middleware' => 'auth'], function()
{
    Route::get('/dashboard','DashboardController@dashboard')->name('display-dashboard');

    Route::resource('/team','TeamController');

});