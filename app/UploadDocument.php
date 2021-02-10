<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UploadDocument extends Model
{
    protected $fillable = [
        'lecture_id', 'doc_name',
    ];
}
