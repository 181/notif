<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Subscription extends Model
{
    protected $fillable = [
    	'email',
    ];

    protected $dates = [
    	'created_at',
    ];
}
