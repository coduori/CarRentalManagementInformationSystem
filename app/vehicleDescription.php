<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class vehicleDescription extends Model
{
     public $fillable=[
    		'chasis_number',
            'licence_plate',
            'model',
            'transmission',
            'image',
            'lease_price',
            'special_features',
            'status',
            'added_by'
    ];
      protected $table ='vehicle_description';
    
}