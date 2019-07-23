<?php

Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/changePassword','HomeController@showChangePasswordForm');
Route::post('/changePassword','HomeController@ChangePassword');
Route::get('send/mail','HomeController@showMail');
Route::post('send/mail','HomeController@sendMail');
Route::post('/phone/update/{id}','HomeController@updatePhone');
Route::post('/email/update/{id}','HomeController@updateEmail');
Route::get('update/{id}',function($id){
	return view('updateProfile')->with('id',$id);
});
Route::get('profile', 'client\userController@history')->name('history');
