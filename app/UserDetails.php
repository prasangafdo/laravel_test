<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserDetails extends Model
{
    protected $fillable = [
    	'first_name',
    	'last_name',
    	'user_address',
    	'date_of_birth'
    ];
}
