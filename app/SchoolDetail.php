<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SchoolDetail extends Model
{
    protected $fillable = [
        'plan_id', 'scl_name', 'type', 'address', 'user_id',
    ];
}
