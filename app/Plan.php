<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Plan extends Model
{
    protected $fillable = [
        'type', 'amount', 'details', 'duration', 'limit_of_students', 'limit_of_faculty',
    ];
}
