<?php

use App\User;

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('indeks.index2');
});


Route::get('/testdb', 'testcontroller@tampilin');

// Authentication routes...
Route::get('auth/login',  'Auth\AuthController@getLogin');
Route::post('auth/login', 'Auth\AuthController@postLogin');
Route::get('auth/logout', 'Auth\AuthController@getLogout');

// Create Account
Route::get('auth/register', 'Auth\AuthController@getRegister');
Route::post('auth/register', 'Auth\AuthController@postRegister');

// Forget password
Route::get('password/email', 'Auth\PasswordController@getEmail');
Route::post('password/email', 'Auth\PasswordController@postEmail');

// Reset password
Route::get('password/reset/{token}', 'Auth\PasswordController@getReset');
Route::get('password/reset', 'Auth\PasswordController@postReset');


///////////////////////


// Get Permission
route::resource('getpermission', 'GetPermissionController');


// Finish Borrowing

// Apply Proposal

Route::resource('applyproposalhall', 'ApplyProposalControllerHall');
Route::resource('applyproposalclassroom', 'ApplyProposalControllerClassroom');
Route::resource('applyproposallaboratory', 'ApplyProposalControllerLaboratory');
Route::resource('applyproposal', 'ApplyProposalController');
Route::post('applyproposal/{id}', 'ApplyProposalController@update');

// View Schedule
Route::get('viewschedule', 'ViewScheduleController@index');

// Head of Major Give Permission
Route::resource('headmajorgivepermission','HeadMajorGivePermissionController');
Route::post('headmajorgivepermission/{id}','HeadMajorGivePermissionController@update');

// Administrator Give Permission
Route::resource('admnistratorgivepermission','AdministratorGivePermissionController');
Route::post('admnistratorgivepermission/{id}', 'AdministratorGivePermissionController@update');

// Finish Borrow
Route::resource('finishborrowing','FinishBorrowingController');
Route::post('finishborrowing/{id}','FinishBorrowingController@update');

// Edit Account
Route::resource('edit','EditAccountController');
Route::post('edit/{id}', 'EditAccountController@update');

// Manage Room
Route::resource('room','RoomController');
Route::post('room/{id}', 'RoomController@update');

// Manage Account
Route::resource('manage', 'ManageAccountController');
Route::post('manage/{id}', 'ManageAccountController@update');

//testing
Route::get('aha', function() {
	return view('indeks.landing');
});

//coba-coba
Route::get('test','TesController@index');
Route::get('tesapply','TesController@tesapply');
Route::get('profile','EditAccountController@profile');

Route::get('carbon', function () {
    $current = Carbon::now();
    return $current;
});