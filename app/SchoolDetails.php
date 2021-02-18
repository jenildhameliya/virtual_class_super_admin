<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SchoolDetails extends Model
{
    protected $fillable = [
        'plan_id', 'scl_name', 'type', 'address', 'usertable_id',
    ];
}
