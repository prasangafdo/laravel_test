<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Students extends Model
{
    protected $fillable = [//These are the data that users need to fill
    	'user_id',
    	'grade',
    	'parent_contact_num'
    ];
}
