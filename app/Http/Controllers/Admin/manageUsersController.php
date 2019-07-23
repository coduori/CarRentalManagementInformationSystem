<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Eloquent\SoftDeletes;
use Session;
use App\user;
use Illuminate\Support\Facades\Auth;
use DB;

class manageUsersController extends Controller
{
    public function index(){
    	$users['users'] = DB::table('users')->where('is_active',true)->where('id', '<>', Auth::id())->where('role', '<>', 'Client')->get();
        $suspended['suspended'] = DB::table('users')->where('is_active',false)->where('deleted_at',NULL)->get();
        $client = DB::table('users')->where('role', 'Client')->where('is_active',true)->where('deleted_at',NULL)->get();
    	return view('admin.manageUsers',$users,$suspended)->with('client',$client);
    }

    public function createUser(Request $request){
    	$request->validate([
        	'employee_id' => 'required|integer|max:999999',
            'first_name' => 'required|string|max:255',
            'surname' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'phone_number' => 'required|string|max:10|min:10|unique:users',
		]);   	
        try{
        $user = user::create([
            'employee_id'=>$request->get('employee_id'),
            'first_name'=>ucwords($request->get('first_name')),
            'surname'=>ucwords($request->get('surname')),
            'email'=>strtolower($request->get('email')),
            'phone_number'=>$request->get('phone_number'),
            'role'=>'Employee',
            'password' => Hash::make('CarGeneral.2019'),
        ]);  
          Session::flash('add_user_success', ucwords($request->get('surname'))." has been added successfully! ");
        return app('App\Http\Controllers\Admin\manageUsersController')->index();
    }catch(QueryException $e){
       Session::flash('add_user_failed', "Cannot add ".ucwords($request->get('surname'))."!");
       return redirect()->back();
    }
}
    public function suspendUser($email){
    	$user=DB::table('users')->where('email',$email)->update(['is_active' => false]);
    	Session::flash('suspend_user_success', " User suspended! ");
        return app('App\Http\Controllers\Admin\manageUsersController')->index();; 
    }

    public function activateUser($email){
		$user=DB::table('users')->where('email',$email)->update(['is_active' => true]);
		Session::flash('activate_user_success', "User activation successful! ");
        return app('App\Http\Controllers\Admin\manageUsersController')->index(); 
    }

    public function deleteUser($email){
		$user=user::where('email', $email)->delete();
		Session::flash('user_deleted'," User deleted! ");
        return app('App\Http\Controllers\Admin\manageUsersController')->index(); 

    }
}
