<?php

namespace App\Http\Controllers\client;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
use App\request_records;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Session;

class requestsController extends Controller
{
    public function index(){
    	$dat=DB::table('vehicle_description')->where(['status'=>'Available'])->get();
        $data= DB::select(DB::raw('select vehicle_description.id,vehicle_description.licence_plate,transmission,image,lease_price,next_service_mileage-current_mileage as milDif FROM vehicle_description LEFT JOIN service_records ON `vehicle_description`.`licence_plate` = `service_records`.`licence_plate` where status="Available" 
'));
    	return view('client.listVehicles')->with('data',$data)->withErrors('errors',$errors);
    }
    public function book($book){
    	$request=DB::table('vehicle_description')->where('id',$book)->get();
        return view('client.requestDetails')->with('request',$request);
    }
    public function confirmBook($book){

        $lease_date = Carbon::now();
        $return_date = Carbon::now()->addDays(1);
        $user=DB::table('users')->where('id',auth::id())->get();
        $request=DB::table('vehicle_description')->where('id',$book)->get();
        $check=DB::select(DB::raw('SELECT * FROM `request_records` WHERE `licence_number` = '.$user[0]->licence_number.' and EXISTS (SELECT `licence_number` FROM `request_records` ) ORDER BY `id` DESC LIMIT 1'));
        if(isset($check[0]->licence_number)==true){
            if($check[0]->status=='Booked'||$check[0]->status=='Pending'){
                Session::flash('cannot_book', " You are not allowed to book multiple cars!");
                return redirect()->back();
            }    
        }
            if($user[0]->licence_expiery<Carbon::parse(Carbon::now())){
                Session::flash('expired', "Please renew your licence first!");
                return redirect()->back();
            }
            $change=DB::table('vehicle_description')->where('id',$book)->update(['status'=>'Pending']);
            $data['data']= request_records::create([
                'licence_plate'=>$request[0]->licence_plate,
                'licence_number'=>$user[0]->licence_number,
                'surname'=>ucwords($user[0]->surname),
                'lease_start'=>$lease_date,
                'lease_end'=>$return_date,
                'cost'=>$request[0]->lease_price,
                'status'=>'Pending',
            ]); 
            $history=DB::table('request_records')->where('licence_number',$user[0]->licence_number)->get();
            Session::flash('book_successful', "Request Successful. Please contact CarGeneral for approval and delivery");
            return view('client.requestHistory')->with(['history'=>$history,'user'=>$user]);   
    }
    public function feedback($id){

        $fetch=request_records::find($id);
        return view('client.feedback')->with('id',$fetch);
    }
    public function feedbackUpdate(Request $request, $id){
        $feed=DB::table('request_records')->where('id',$id)->update(['feedback'=>$request->feedback]);
        return app('App\Http\Controllers\client\userController')->history();
    }
   
}
