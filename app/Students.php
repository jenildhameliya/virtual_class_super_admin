<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Students extends Model
{
    protected $fillable = [
        'class_id', 'country_id', 'state_id', 'city_id', 'admission_num', 'fname', 'mname', 'lname', 'gender', 'dob', 'address', 'category', 'religion', 'mobile_no', 'email', 'password', 'addmission_date', 'profile', 'father_name', 'father_occupation', 'father_phone','mother_name', 'mother_occupation', 'mother_phone',
    ];
}
