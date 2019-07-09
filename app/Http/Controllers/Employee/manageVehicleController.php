<?php

namespace App\Http\Controllers\Employee;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\vehicleDescription;
use App\insure;
use App\service_records;
use Intervention\Image\Facades\Image;
use DB;
use Illuminate\Support\Facades\Mail;
use App\Mail\mailSender;
use App\Mail\canceledRequests;

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
        dd($request->validate);
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
		$vehicle->save();
        $insure=  insure::create([
            'licence_plate' => $request->get('plate'),
            'type' => $request->get('type'),
            'company' => $request->get('company'),
            'cost' => $request->get('cost'),
            'renewal_date' => $request->get('renewal'),
            'expiery_date' => $request->get('expiery'),
            'comments' => $request->get('comments')
        ]);
        $insure->save();
        $service = service_records::create([
            'licence_plate'=>$request->get('plate'),
            'date'=>$request->get('service_date'),
            'current_mileage'=>$request->get('mileage'),
            'cost'=>$request->get('cost'),
            'next_service_mileage'=>$request->get('next_service'),
            'comments'=>$request->get('comments')
        ]);
        $service->save();
        Session::flash('add_vehicle_success', ucwords($request->get('plate'))." has been added successfully! ");
		return redirect()->back();
    }
    public function Requests(){
        $requests =DB::table('request_records')->where('status','Pending')->get();
        return view('employee.requests')->with('requests',$requests);
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
        Mail::to( $this->user['email'])->send(new mailSender($user));
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
        Mail::to( $this->user['email'])->send(new canceledRequests($user));
        return redirect()->back();
    }
}
