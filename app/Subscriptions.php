<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Subscriptions extends Model
{
    protected $fillable = [
    	'user_id', 'name', 'stirpe_id', 'stripe_plan',  
    ];
}
