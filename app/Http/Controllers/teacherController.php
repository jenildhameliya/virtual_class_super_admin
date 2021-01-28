<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class teacherController extends Controller
{
    public function index()
    {
        return view('super_Admin.user.teacher_show');
    }
}
