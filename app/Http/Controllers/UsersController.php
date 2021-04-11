<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Session;

class UsersController extends Controller
{
    public function createUser(Request $request){
        // dd($request->all());
        $url = config('global.url').'create_user/';

        $data = [
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'email' => $request->email,
            'password' => '12345678',
            'roles' => $request->roles,
            'phone' => $request->phone,
            'identification_no' => $request->identification_no,
        ];

        $response = Http::withToken(Session::get('token'))->post($url,$data);
        $created = json_decode($response->body());

        // dd($created);

        if(is_null($created))
        {
            // dd($created);
            return redirect()->back()->with('errors', 'An error occured. Please try again');
        }

        if(!$created->success)
        {
            return redirect()->back()->with('errors', $created->msg);
        }

        if(is_null($created->data)){
            dd($created);
        }

        return redirect()->back()->with('success', $created->msg);

        // dd(Session::all());
    }

    public function getactiveUsers(Request $request){
        $url = config('global.url').'client_logs/';

        $response = Http::withToken(Session::get('token'))->get($url);

        $created  = json_decode($response->body());

        // dd($created);


        if(is_null($created))
        {
            return redirect()->route('activeUsers')->with('errors', 'An error occured.');
        }

        if(!$created->success)
        {
            return redirect()->route('activeUsers')->with('errors', 'Obtaining properties');
        }

        return view('content/active_users', ['activeUsers' => $created->data]);
        // return view('usv')->with($lr_no);
    }
}
