<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\UserTables;
use App\Roles;
use App\Countries;
use App\States;
use App\Cities;

class adminController extends Controller
{
    public function index()
    {
    	return view('super_admin.admin.index');
    }

    public function user_create()
    {
        $role = Roles::all();
        $country = Countries::all();
        $state = States::all();
        $city = Cities::all();
    	//dd($country);
    	return view('super_admin.admin.user_create',compact('role', 'country', 'state', 'city'));
    	// return view('super_admin.admin.user_create');
    }

    public function admin_create()
    {
    	return view('super_admin.admin.admin_create');
    }

    public function user_insert(Request $request)
    {
        $usersubmit = new UserTable();
    	$usersubmit ->fname = $request->fname;
    	$usersubmit ->mname = $request->mname;
    	$usersubmit ->lname = $request->lname;
    	$usersubmit ->gender = $request->gender;
    	$usersubmit ->dob = $request->dob;
    	$usersubmit ->email = $request->email;
    	$usersubmit ->address = $request->address;
        $usersubmit ->password = $request->password;
    	$usersubmit ->qualification = $request->qualification;
    	$usersubmit ->experience = $request->experience;
    	$usersubmit ->doj = $request->doj;
    	$usersubmit ->avatar = $request->avatar;
    	$usersubmit ->role_id = $request->role_id;
        return response()->json([
            "message" => "student record created"
        ], 201);
    	//$usersubmit ->save();
    	// dd($usersubmit);exit;
        // echo "<pre>".print_r($usersubmit);exit;
    	// return redirect()->route("userview");
    	// return redirect()->route("user_create");
    }

    public function admin_insert()
    {
        echo "hello";
    }

    public function edit()
    {
        return view('super_Admin.admin.admin_edit');
    }
}
