<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserTable extends Model
{
    protected $fillable = [
        'fname', 'mname', 'lname', 'email', 'password', 'gender', 'dob', 'qualification', 'experience', 'doj', 'avatar', 'role_id',
    ];
}
