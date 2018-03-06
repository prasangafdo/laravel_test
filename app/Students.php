<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Students extends Model
{
    protected $fillable = [//These are the data that users need to fill
        'name',
        'student_address',
    	'grade',
    	'parent_contact_num'
    ];

    public function user(){
        return $this->belongsTo('App\User');
    }

    // public function term_fee(){
    //     return $this->belongsTo('App\TermFees');
    // }
}
