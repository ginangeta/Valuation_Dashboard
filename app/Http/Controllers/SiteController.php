<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SiteController extends Controller
{
    public function dashboard()
    {
        return view('content/dashboard');
    }

    public function addProperty()
    {
        return view('content/new-property');
    }

    public function allProperty(){
        return view('content/valuation-roll');
    }

    
    public function allObjection(){
        return view('content/objections');
    }

    public function allPayments(){
        return view('content/payments');
    }

    public function systemUsage(){
        return view('content/system_usage');
    }

    public function newUser(){
        return view('content/new-user');
    }

    public function activeUsers(){
        return view('content/active_users');
    }

    public function blockedUsers(){
        return view('content/blocked_users');
    }

    public function userManage(){
        return view('content/user_management');

    }
}
