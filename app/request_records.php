<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class request_records extends Model
{
	public $fillable=[
    		'licence_plate',
            'surname',
            'licence_number',
            'lease_start',
            'lease_end',
            'cost',
            'status',
            'penalty',
            'approved_by'
    ];
}
