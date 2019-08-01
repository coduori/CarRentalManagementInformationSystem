<?php 

Route::group(['middleware' => ['web']],function(){
Route::get('/listVehicles', 'functionsController@index');
Route::get('/details/{plate}', 'functionsController@details');
Route::post('/update/{plate}/insurance', 'functionsController@updateInsurance');
Route::post('/update/{plate}/service', 'functionsController@updateService');
Route::get('/delete/{plate}/insurance/{id}', 'functionsController@deleteInsurance');
Route::get('/delete/{plate}/service/{id}', 'functionsController@deleteService');
Route::get('/reports', 'functionsController@reports');
Route::get('/update/{plate}/insurance', function($plate){

	return view('employee.insurance')->with('plate',$plate);

			});
Route::get('/update/{plate}/service', function($plate){

return view('employee.service')->with('plate',$plate);

			});
});
