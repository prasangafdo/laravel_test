<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Fee extends Model
{
     protected $fillable = [
    	'student_id',
    	'is_paid',
    	'paid_date',
    	'next_due_date',
    	'fee'
    ];

    public function student(){
        return $this->belongsTo('App\Students');
    }

    public function manyStudent(){
        return $this->hasMany('App\Students');
    }

}
