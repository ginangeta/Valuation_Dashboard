<?php

use Illuminate\Support\Facades\Route;

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
    return view('auth.login');
});

Route::get('/', 'PagesController@home')->name('home');

Route::get('dashboard', 'SiteController@dashboard')->name('dashboard');

// Authentication
Route::get('forgot-password', 'AuthController@forgotPassword')->name('forgot-password');
Route::post('authenticate', 'AuthController@authenticate')->name('authenticate');
Route::post('registration', 'AuthController@registration')->name('registration');
Route::post('password-request', 'AuthController@requestPassword')->name('password.request');
Route::get('change-password', 'AuthController@changePassword')->name('password.change');
Route::post('password-reset', 'AuthController@resetPassword')->name('password.reset');
Route::get('logout', 'AuthController@logout')->name('logout');

//Pages
Route::get('AddProperty', 'SiteController@addProperty')->name('AddProperty');
Route::get('AllProperty', 'SiteController@allProperty')->name('AllProperty');
Route::get('AllObjections', 'SiteController@allObjection')->name('AllObjections');
Route::get('AllPayments', 'SiteController@allPayments')->name('AllPayments');

Route::get('systemUsage', 'SiteController@systemUsage')->name('systemUsage');
Route::get('newUser', 'SiteController@newUser')->name('newUser');
Route::get('activeUsers', 'SiteController@activeUsers')->name('activeUsers');
Route::get('blockedUsers', 'SiteController@blockedUsers')->name('blockedUsers');
Route::get('userManage', 'SiteController@userManage')->name('userManage');

//Reports
Route::get('getAllObjections', 'ReportsController@getAllObjections')->name('getAllObjections');
Route::get('getAllProperties', 'ReportsController@getAllProperties')->name('getAllProperties');
Route::get('getAllPayments', 'ReportsController@getAllPayments')->name('getAllPayments');
Route::get('singleobjection/{lr_no}', 'ReportsController@singleobjection')->name('singleobjection');

//Roll
Route::post('uploadRoll', 'UploadRollController@uploadRoll' )->name('uploadRoll');

//Users
Route::post('createUser', 'UsersController@createUser' )->name('createUser');
Route::get('getactiveUsers', 'UsersController@getactiveUsers')->name('getactiveUsers');



