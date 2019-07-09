<?php

namespace App\Http\Controllers\client;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
use App\user;
use Illuminate\Support\Facades\Hash;

class userController extends Controller
{
    public function register(Request $request){
    	$request->validate([
    		'licence_number'=>'required|integer|unique:users',
            'email' => 'required|string|email|max:255|unique:users',
            'phone_number' => 'required|string|max:10|min:10|unique:users',
		]);  
		$ntsa = DB::table('ntsa_records')->where('licence_number',$request->get('licence_number'))->get(); 
        user::create([
          	'licence_number'=>$request->get('licence_number'),
            'first_name'=>ucwords($ntsa[0]->first_name),
            'surname'=>ucwords($ntsa[0]->surname),
            'role'=>'Client',
            'email'=>$request->get('email'),
            'expiery'=>$ntsa[0]->expiery,
            'phone_number'=>$request->get('phone_number'),
            'password' => Hash::make($request->get('password')),
        ]);
        return view('home');
    }
}
