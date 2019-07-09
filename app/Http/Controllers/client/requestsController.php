<?php

namespace App\Http\Controllers\client;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
use App\request_records;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;

class requestsController extends Controller
{
    public function index(){
    	$data=DB::table('vehicle_description')->where('status','=','Available')->get();
    	return view('client.listVehicles')->with('data',$data);;
    }
    public function book($book){
    	$request=DB::table('vehicle_description')->where('id',$book)->get();

        return view('client.requestDetails')->with('request',$request);
    }
    public function confirmBook($book){
        $lease_date = Carbon::now();
        $return_date = Carbon::now()->addDays(1);
        $request=DB::table('vehicle_description')->where('id',$book)->get();
        $user=DB::table('users')->where('id',auth::id())->get();
        $change=DB::table('vehicle_description')->where('id',$book)->update(['status' => 'Pending']);
        $data['data']= request_records::create([
            'licence_plate'=>$request[0]->licence_plate,
            'licence_number'=>$user[0]->licence_number,
            'surname'=>ucwords($user[0]->surname),
            'lease_start'=>$lease_date,
            'lease_end'=>$return_date,
            'cost'=>$request[0]->lease_price,
        ]); 
        $history=DB::table('request_records')->where('licence_number',$user[0]->licence_number)->get();
        return view('client.requestHistory')->with('history',$history);
    }
    public function history(){
        $user=DB::table('users')->where('id',auth::id())->get();
        $history=DB::table('request_records')->where('licence_number',$user[0]->licence_number)->get();
        return view('client.requestHistory')->with('history',$history);
    }
}
