<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UploadDocuments extends Model
{
    protected $fillable = [
        'lecture_id', 'doc_name',
    ];
}
