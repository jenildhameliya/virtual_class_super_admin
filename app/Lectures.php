<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Lectures extends Model
{
    protected $fillable = [
        'user_id', 'class_id', 'subject_id', 'description', 'date', 'start_time', 'end_time',
    ];
}
