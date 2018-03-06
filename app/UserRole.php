<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserRole extends Model
{
    protected $fillable = [
    	'user_role',
    ];

    public function user(){
        return $this->belongsTo('App\User');
    }
}
