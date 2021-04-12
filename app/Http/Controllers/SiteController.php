<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Session;

class SiteController extends Controller
{
    public function dashboard()
    {
        $dashUrl = config('global.url').'/dashboard_info';

        $dashResponse = Http::withToken(Session::get('token'))->get($dashUrl);

        $dashCreated  = json_decode($dashResponse->body());

        if(is_null($dashCreated))
        {
            return redirect()->back()->with('errors', 'Failed to get dashboard data.');
        }

        if(!$dashCreated->success)
        {
            return redirect()->back()->with('errors', 'Obtaining properties');
        }

        // dd($dashCreated);
        
        return view('content/dashboard', [
            'DashboardData' => $dashCreated->data]);    }

    public function addProperty()
    {
        $session = Session::get('token');
        
        return view('content/new-property',['session'=> $session]);
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
