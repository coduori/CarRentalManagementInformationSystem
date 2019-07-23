<?php 
Route::group([],function(){
Route::post('feedback/{id}','requestsController@feedbackUpdate');
Route::get('/client/book', 'requestsController@index');
Route::get('/book/{id}', 'requestsController@book');
Route::post('client/register', 'userController@register');
Route::get('confirm/{id}', 'requestsController@confirmBook');
Route::get('feedback/{id}','requestsController@feedback');
Route::get('feedback/{id}','requestsController@feedback');
});