<?php 
Route::group(['middleware' => ['admin']],function(){
	Route::post('/createUser', 'manageUsersController@createUser');
	Route::get('activate/{email}', 'manageUsersController@activateUser');
	Route::get('suspend/{email}', 'manageUsersController@suspendUser');
	Route::get('delete/{email}', 'manageUsersController@deleteUser');
	Route::get('/manageUsers', 'manageUsersController@index');
});