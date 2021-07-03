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

// Authentication
Route::get('forgot-password', 'AuthController@forgotPassword')->name('forgot-password');
Route::post('authenticate', 'AuthController@authenticate')->name('authenticate');
Route::post('registration', 'AuthController@registration')->name('registration');
Route::post('password-request', 'AuthController@requestPassword')->name('password.request');
Route::post('change-password', 'AuthController@changePassword')->name('password.change');
Route::get('newpassword', 'AuthController@newPassword')->name('password.new');
Route::post('password-reset', 'AuthController@resetPassword')->name('password.reset');
Route::get('user-password-reset', 'AuthController@userResetPassword')->name('user-password-reset');
Route::get('logout', 'AuthController@logout')->name('logout');

Route::group(['middleware' => ['active']], function () {
    //Pages
    Route::get('dashboard', 'SiteController@dashboard')->name('dashboard');
    Route::get('AddProperty', 'SiteController@addProperty')->name('AddProperty');
    Route::get('AllProperty', 'SiteController@allProperty')->name('AllProperty');
    Route::get('AllObjections', 'SiteController@allObjection')->name('AllObjections');
    Route::get('WithdrawnObjections', 'SiteController@withdrawnObjections')->name('WithdrawnObjections');
    Route::get('AllPayments', 'SiteController@allPayments')->name('AllPayments');

    Route::get('systemUsage', 'SiteController@systemUsage')->name('systemUsage');
    Route::get('newUser', 'SiteController@newUser')->name('newUser');
    Route::get('activeUsers', 'SiteController@activeUsers')->name('activeUsers');
    Route::get('blockedUsers', 'SiteController@blockedUsers')->name('blockedUsers');
    Route::get('userManage', 'SiteController@userManage')->name('userManage');

    //Reports
    Route::get('getAllObjections', 'ReportsController@getAllObjections')->name('getAllObjections');
    Route::get('getAllWithdrawnObjections', 'ReportsController@getAllWithdrawnObjections')->name('getAllWithdrawnObjections');
    Route::get('getObjections/{page}', 'ReportsController@getObjections')->name('getObjections');
    Route::get('getAllProperties', 'ReportsController@getAllProperties')->name('getAllProperties');
    Route::get('getProperties/{page}', 'ReportsController@getProperties')->name('getProperties');
    Route::get('getAllPayments', 'ReportsController@getAllPayments')->name('getAllPayments');
    Route::get('getPayments/{page}', 'ReportsController@getPayments')->name('getPayments');
    Route::get('singleobjection/{lr_no}', 'ReportsController@singleobjection')->name('singleobjection');
    Route::get('getObjections/singleobjection/{lr_no}', 'ReportsController@singleobjection')->name('singleobjection');

    Route::get('getAllTowns', 'ReportsController@getAllTowns')->name('getAllTowns');
    Route::post('addTown', 'ReportsController@addTown')->name('addTown');

    Route::post('getSearchedBill', 'ReportsController@getSearchedBill')->name('getSearchedBill');
    Route::post('getSearchedObjection', 'ReportsController@getSearchedObjection')->name('getSearchedObjection');

    Route::get('getClientLogs', 'ReportsController@getClientLogs')->name('getClientLogs');
    Route::get('getSearchedProperties', 'ReportsController@getSearchedProperties')->name('getSearchedProperties');

    //Roll
    Route::post('uploadRoll', 'UploadRollController@uploadRoll' )->name('uploadRoll');

    //Users
    Route::post('createUser', 'UsersController@createUser' )->name('createUser');
    Route::get('getactiveUsers', 'UsersController@getactiveUsers')->name('getactiveUsers');
    Route::post('editUser', 'UsersController@editUser')->name('editUser');
    Route::post('deactivateUser', 'UsersController@deactivateUser')->name('deactivateUser');

    Route::get('/export-pdf', 'PdfController@exportPdf')->name('export-pdf');
    Route::get('printObjections/{url}', 'PdfController@printObjections')->name('printObjections');
    Route::get('printNextObjections/{url}', 'PdfController@printObjections')->name('printNextObjections');

    // Route::get('/export-pdf', [App\Http\Controllers\PdfController::class, 'exportPdf']);

});


