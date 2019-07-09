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


Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');


Route::get('/client/book', 'client\requestsController@index')->name('view_cars');
Route::get('/book/{id}', 'client\requestsController@book')->name('book_car');
Route::post('client/register', 'client\userController@register')->name('register_client');
Route::get('confirm/{id}', 'client\requestsController@confirmBook')->name('confirm_book');
Route::get('client/history', 'client\requestsController@history')->name('history');

Route::get('/addCar', 'employee\manageVehicleController@index')->name('add_vehicle');
Route::post('/addCar', 'employee\manageVehicleController@newCar')->name('new_car');
Route::post('/addInsurance/{plate}', 'employee\manageVehicleController@addInsurance')->name('insure_new');
Route::post('/serviceCar/{plate}', 'employee\manageVehicleController@addService')->name('initial_service');
Route::get('employee/requests', 'employee\manageVehicleController@requests')->name('requests');
Route::get('approve/{id}', 'employee\manageVehicleController@approve')->name('approve');
Route::get('cancel/{id}', 'employee\manageVehicleController@cancel')->name('cancel');

Route::post('/createUser', 'admin\manageUsersController@createUser')->name('create_user');
Route::get('activate/{email}', 'admin\manageUsersController@activateUser')->name('activate_user');
Route::get('suspend/{email}', 'admin\manageUsersController@suspendUser')->name('suspend_user');
Route::get('delete/{email}', 'admin\manageUsersController@deleteUser')->name('delete_user');
Route::get('/manageUsers', 'admin\manageUsersController@index')->name('manage_users');

Route::get('/listVehicles', 'staff\functionsController@index')->name('list_vehicles');
Route::get('/details/{plate}', 'staff\functionsController@details')->name('vehicle_details');
Route::post('/update/{plate}/insurance', 'staff\functionsController@updateInsurance')->name('update_insurance');
Route::post('/update/{plate}/service', 'staff\functionsController@updateService')->name('update_service');
Route::get('/delete/{plate}/insurance', 'staff\functionsController@deleteInsurance')->name('delete_insurance');
Route::get('/delete/{plate}/service', 'staff\functionsController@deleteService')->name('delete_service');
