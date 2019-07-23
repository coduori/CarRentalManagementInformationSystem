<?php

namespace App\Http\Controllers\Employee;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\vehicleDescription;
use App\insure;
use App\service_records;
use Intervention\Image\Facades\Image;
use DB;
use Session;
use Illuminate\Support\Facades\Mail;
use App\Mail\mailSender;
use App\Mail\canceledRequests;
use Carbon\Carbon;

class manageVehicleController extends Controller
{
    public function index(){
    	return view('employee.addCar');
    }
    public function newCar(Request $request){
    	$request->validate([
        	'chasis_number' => 'unique:vehicle_description|required',
            'licence_plate' => 'unique:vehicle_description|required|unique:insurance_records|unique:service_records',
            'image'         => 'image|mimes:jpeg,png,jpg,gif,svg|required',
            'model'         => 'required',
            'transmission'  => 'required',
            'lease_price'   => 'required',
            'special_features' => 'required',
            'type'          => 'required',
            'company'       => 'required',
            'cost'          => 'required',
            'renewal_date'  => 'required',
            'expiery_date'  => 'required',
		]); 
        $image = $request->file('file');
        $input['imagename'] =$request->get('plate').'.'.$image->getClientOriginalExtension();
        $destinationPath = public_path('/images');
        $img = Image::make($image->getRealPath());
        $img->resize(300, 200)->save($destinationPath.'/'.$input['imagename']);
        $destinationPath = public_path('/thumbnails');
        $image->move($destinationPath, $input['imagename']);
        $user_id = auth()->user()->employee_id;   
        $vehicle=  vehicleDescription::create([
            'chasis_number' => $request->get('chasis'),
            'licence_plate' => $request->get('plate'),
            'model' => $request->get('model'),
            'transmission' => $request->get('transmission'),
            'image' => $input['imagename'],
            'lease_price' => $request->get('price'),
            'special_features' => $request->get('features'),
            'status' =>"Available",
            'added_by' => $user_id 
        ]);
        $insure=  insure::create([
            'licence_plate' => $request->get('plate'),
            'type' => $request->get('type'),
            'company' => $request->get('company'),
            'cost' => $request->get('cost'),
            'renewal_date' => $request->get('renewal'),
            'expiery_date' => $request->get('expiery'),
            'comments' => $request->get('comments')
        ]);
        $service = service_records::create([
            'licence_plate'=>$request->get('plate'),
            'date'=>$request->get('service_date'),
            'current_mileage'=>$request->get('mileage'),
            'cost'=>$request->get('cost'),
            'next_service_mileage'=>$request->get('next_service'),
            'comments'=>$request->get('comments')
        ]);
        try{
            $insure->save();
            $vehicle->save();
            $service->save();
            Session::flash('add_vehicle_success', ucwords($request->get('plate'))." has been added successfully! ");
            return redirect()->back();
        }
        catch(QueryException $e){
            Session::flash('add_vehicle_falied', ucwords($request->get('plate'))." record conflict! ");
		    return redirect()->back();
        }
    }
    public function Requests(){
        $requests =DB::table('request_records')->where('status','Pending')->get();
        $approved =DB::table('request_records')->where('status','Approved')->get();
        return view('employee.requests')->with(['requests'=>$requests,'approved'=>$approved]);
    }
    public function approve($id){
        $requests = DB::table('request_records')->where('id',$id)->get();
        $user_details= DB::table('users')->where('licence_number',$requests[0]->licence_number)->get();
        $approve1 =DB::table('vehicle_description')->where('licence_plate',$requests[0]->licence_plate)
                            ->update(['status'=> 'Booked']);
        $user=array(
                    'surname'=>$requests[0]->surname,
                    'licence'=>$user_details[0]->licence_number,
                    'expiery'=>$user_details[0]->licence_expiery,
                    'plate'=>$requests[0]->licence_plate,
                    'start'=>$requests[0]->lease_start,
                    'end'=>$requests[0]->lease_end,
                    'email'=>$user_details[0]->email
        );
        $approve2 =DB::table('request_records')->where('id',$id)
                            ->update([
                                        'status'=> 'Approved',
                                        'approved_by'=> auth()->user()->employee_id
                                    ]);
        Mail::to($user['email'])->send(new mailSender($user));
        Session::flash('approved', " Please deliver ".$requests[0]->licence_plate."to ".$requests[0]->surname);
        return redirect()->back();       
    }public function cancel($id){
        $requests = DB::table('request_records')->where('id',$id)->get();
        $user_details= DB::table('users')->where('licence_number',$requests[0]->licence_number)->get();
        $user=array(
                    'surname'=>$requests[0]->surname,
                    'licence'=>$user_details[0]->licence_number,
                    'expiery'=>$user_details[0]->licence_expiery,
                    'plate'=>$requests[0]->licence_plate,
                    'start'=>$requests[0]->lease_start,
                    'end'=>$requests[0]->lease_end,
                    'email'=>$user_details[0]->email
        );
        $cancel1 =DB::table('vehicle_description')->where('licence_plate',$requests[0]->licence_plate)
                            ->update(['status'=> 'Available']); 
        $cancel2 =DB::table('request_records')->where('id',$id)
                            ->update([
                                        'status'=> 'Canceled',
                                        'approved_by'=> auth()->user()->employee_id
                                    ]);
        Mail::to( $user['email'])->send(new canceledRequests($user));
        Session::flash('canceled', "Request Canceled!");
        return redirect()->back();
    }
    public function extend($id){
        $extend=DB::table('request_records')->where('id',$id)->get();
        return view('employee.extendLease')->with('extend',$extend);
    }
    public function extendUpdate(Request $request,$id){
        $extend=DB::table('request_records')->where('id',$id)->get();
        $current_date=Carbon::parse($extend[0]->lease_start);
        $extended_date=Carbon::parse($request->plate);
        $days=$current_date->diffInDays($extended_date);
        $newCost=$days*$extend[0]->cost;
        $update=DB::table('request_records')
                  ->where('id',$id)
                 ->update([
                            'lease_end'=>$request->plate,
                            'cost'=>$newCost,
                        ]);
        Session::flash('extended', "Request Extended to".$request->plate);
        return redirect()->back();
    }   
    public function pick($id){
        $fetch=DB::table('request_records')->where('id',$id)->get();
        $licence_plate=$fetch[0]->licence_plate;
        return view('employee.updateReturnedCar')->with(['plate'=>$licence_plate,'id'=>$id]);
    }    
    public function updateCollect(Request $request,$id,$plate){
        $update_request1=DB::table('request_records')->where('id',$id)->update(['status'=>'Returned']);
        $update_request3=DB::table('service_records')
                            ->where('licence_plate',$plate)
                            ->update(['current_mileage'=>$request->mileage]);
        $fetch=service_records::find($id);
        $mildif=$fetch->next_service_mileage-$fetch->current_mileage;
        if($mildif>500){
        $update_request2=DB::table('vehicle_description')
                          ->where('licence_plate',$plate)
                          ->update(['status'=>'Available']);
        
                 Session::flash('collected', $plate." is ready for booking");
                 }
        else{
                Session::flash('service', $plate." is ready for service");
        }                   
        return app('App\Http\Controllers\Employee\manageVehicleController')->Requests(); 
    }
    public function addInsurance(Request $request,$plate){
        $request->validate([
            'licence_plate' => 'unique:vehicle_records',
        ]); 
        $insure=  insure::create([
            'licence_plate' => $plate,
            'type' => $request->get('type'),
            'company' => $request->get('company'),
            'cost' => $request->get('cost'),
            'renewal_date' => $request->get('renewal'),
            'expiery_date' => $request->get('expiery'),
            'comments' => $request->get('comments')
        ]);
        $insure->save();
        Session::flash('insurance', $plate." is insured!");
        return app('App\Http\Controllers\staff\functionsController')->details($plate); 
    }
    public function addService(Request $request, $plate){
        $request->validate([
            'licence_plate' => 'unique:vehicle_records',
        ]); 
        $service = service_records::create([
            'licence_plate'=>$plate,
            'date'=>$request->get('service_date'),
            'current_mileage'=>$request->get('mileage'),
            'cost'=>$request->get('cost'),
            'next_service_mileage'=>$request->get('next_service'),
            'comments'=>$request->get('comments')
        ]);
        $service->save();
        Session::flash('service', $plate." is serviced!");
        return app('App\Http\Controllers\staff\functionsController')->details($plate); 
    }
}
