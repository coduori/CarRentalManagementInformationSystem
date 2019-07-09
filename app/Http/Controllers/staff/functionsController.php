<?php

namespace App\Http\Controllers\staff;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
use App\insure;
use App\service_records;

class functionsController extends Controller
{
    public function index(){
    	$data= DB::table('vehicle_description')
    	->leftjoin('insurance_records','vehicle_description.licence_plate','=','insurance_records.licence_plate')
        ->orderBy('insurance_records.licence_plate', 'desc',1)
    	->leftjoin('service_records','vehicle_description.licence_plate','=','service_records.licence_plate')
        ->orderBy('service_records.licence_plate', 'desc',1)
    	->select('vehicle_description.licence_plate',
    			 'model',
    			 'lease_price',
    			 'status',
    			 'type',
    			 'expiery_date',
    			 'current_mileage',
    			 'next_service_mileage'
    			)->get();
 	return view ('staff.vehicleList')->with('data',$data);
    }
    public function details($plate){
    	$vehicle = DB::table('vehicle_description')
            ->join('insurance_records', 'vehicle_description.licence_plate', '=', 
                    'insurance_records.licence_plate')
            ->orderBy('insurance_records.updated_at', 'desc')
            ->join('service_records', 'vehicle_description.licence_plate', '=', 
                    'service_records.licence_plate')
            ->orderBy('service_records.updated_at', 'desc')
            ->where('vehicle_description.licence_plate',$plate)->first();
            $insurance = DB::table('insurance_records')->where('licence_plate',$plate)->get();
            $service= DB::table('service_records')->where('licence_plate',$plate)->get();
        return view('staff.carDetails',compact('vehicle','insurance','service'));

    }
    public function getInsurance($plate){
        $data = DB::table('insurance_records')->where('licence_plate',$plate)->get();
        return view()->with('data',$data);
    }
    public function getService($plate){
        $data = DB::table('service_records')->where('licence_plate',$plate)->get();
        return view()->with('data',$data);
    }
    public function deleteInsurance($plate){
        insure::where('licence_plate', $plate)->delete();
        return app('App\Http\Controllers\staff\functionsController')->details($plate); 
    }
    public function deleteService($plate){
        service_records::where('licence_plate', $plate)->delete();
        return app('App\Http\Controllers\staff\functionsController')->details($plate); 
    }
}
