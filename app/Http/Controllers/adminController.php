<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class adminController extends Controller
{
    public function index()
    {
    	return view('super_admin.admin.index');
    }

    public function insert()
    {
    	return view('super_admin.admin.admin_create');
    }

    public function edit()
    {
        return view('super_Admin.admin.admin_edit');
    }
}
