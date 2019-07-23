 <?php 
Route::group(['middleware' => ['employee']],function(){
Route::get('/addCar', 'manageVehicleController@index');
Route::post('/addCar', 'manageVehicleController@newCar');
Route::post('/addInsurance/{plate}', 'manageVehicleController@addInsurance');
Route::post('/serviceCar/{plate}', 'manageVehicleController@addService');
Route::get('employee/requests', 'manageVehicleController@requests');
Route::get('approve/{id}', 'manageVehicleController@approve');
Route::get('cancel/{id}', 'manageVehicleController@cancel');
Route::get('extend/{id}', 'manageVehicleController@extend');
Route::get('collect/{id}', 'manageVehicleController@pick');
Route::post('new/{id}/{plate}', 'manageVehicleController@updateCollect');
Route::post('extend/{id}', 'manageVehicleController@extendUpdate');
});
