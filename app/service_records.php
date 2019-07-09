<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class service_records extends Model
{    
    public $fillable=[
    		'licence_plate',
            'date',
            'current_mileage',
            'cost',
            'next_service_mileage',
            'comments'
    ];
}
