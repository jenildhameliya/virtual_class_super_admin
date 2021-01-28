<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class studentController extends Controller
{
    public function index()
    {
        return view('super_admin.user.student_show');
    }
}
