<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ntsa_records extends Model
{
	public $fillable=[
            'licence_number',
            'first_name',
            'surname',
            'expiery'
    ];
}
