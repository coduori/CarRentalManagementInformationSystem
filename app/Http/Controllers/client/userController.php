<?php

namespace App\Http\Controllers\client;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
use App\user;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Session;

class userController extends Controller
{
    public function register(Request $request){
    	$request->validate([
    		'licence_number'=>'required|integer|unique:users',
            'email' => 'required|string|email|max:255|unique:users',
            'phone_number' => 'required|string|max:10|min:10|unique:users',
		]);  
        try{
		    $ntsa = DB::table('ntsa_records')->where('licence_number',$request->get('licence_number'))->get(); 
            user::create([
              	'licence_number'=>$request->get('licence_number'),
                'first_name'=>ucwords($ntsa[0]->first_name),
                'surname'=>ucwords($ntsa[0]->surname),
                'role'=>'Client',
                'email'=>$request->get('email'),
                'licence_expiery'=>$ntsa[0]->expiery,
                'national_id'=>$ntsa[0]->national_id,
                'phone_number'=>$request->get('phone_number'),
                'password' => Hash::make($request->get('password')),
            ]);
            Session::flash('registration_success', " Registration successful!");
            return view('auth.login');
        }catch(QueryException $e){
            Session::flash('registration_failed', " Registration failed!");
            return redirect()->back();
        }
    }
     public function history(){
        $user=DB::table('users')->where('id',auth::id())->get();
        $history=DB::table('request_records')->where('licence_number',$user[0]->licence_number)->get();
        return view('client.requestHistory')->with(['history'=>$history,'user'=>$user]);
    }
}
