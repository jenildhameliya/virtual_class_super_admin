<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class subscriptionController extends Controller
{
    public function index()
    {
    	return view('super_admin.subscriptions.subscription_show');
    }

    public function create()
    {
        return view('super_admin.subscriptions.subscription_create');
    }
}
