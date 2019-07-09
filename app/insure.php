<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class insure extends Model
{
    public $fillable=[
    		'licence_plate',
            'type',
            'company',
            'cost',
            'renewal_date',
            'expiery_date',
            'comments'
    ];
      protected $table ='insurance_records';
}
