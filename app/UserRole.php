<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserRole extends Model
{
    protected $fillable = [
    	'user_id',
    	'user_role',
    ];

    public function user(){
        return $this->hasMany('App\User');
    }
}
