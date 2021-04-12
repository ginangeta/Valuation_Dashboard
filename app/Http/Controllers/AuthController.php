<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Session;

class AuthController extends Controller
{
    //

    public function signin()
    {
        return view('auth.login');
    }

    public function authenticate(Request $request)
    {
        // dd($request->all());
        $url = config('global.url').'user/login/';

        $data = [
            'email' => $request->email,
            'password' => $request->password
        ];

        // dd($data);

        $response = Http::post($url,$data);

        $created = json_decode($response->body());

        // dd($created);

        if(is_null($created))
        {
            return redirect()->back()->with('errors', 'An error occured.');
        }

        if(is_null($created->data)){
            return redirect()->back()->with('errors', $created->msg);
        }

        if($created->success = false)
        {
            return redirect()->back()->with('errors', $created->msg);
        }

        if(in_array('county_client', $created->data->roles, TRUE)){
            dd($created->data->roles);
            return redirect()->back()->with('errors', 'You have to be an admin to access this site.');
        }
        
        Session::put('user', $created->data);

        Session::put('token', $created->data->token);

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
            'DashboardData' => $dashCreated->data]);
    }

    public function registration(Request $request){
        // dd($request->all());
        $url = config('global.url').'register/client/';

        
        $validated = $request->validate([
            'password' => 'min:6',
            'password_confirmation' => 'min:6|required_with:password_confirmation|same:password_confirmation'
        ]);
        
        $data = [
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'email' => $request->email,
            'phone' => $request->phone,
            'identification_no' => $request->identification_no,
            'password' => $request->password
        ];

        // dd($data);

        $response = Http::withToken(Session::get('token'))->post($url,$data);

        $created = json_decode($response->body());

        // dd($created);

        if(is_null($created))
        {
            return redirect()->back()->with('errors', 'An error occured.');
        }

        if($created->success = false)
        {
            return redirect()->back()->with('error', $created->msg);
        }

        // dd($created);

        Session::put('register', $created->data);
        return redirect()->back()->with('success', $created->msg);

        // dd(Session::all());

    }

    public function forgotPassword()
    {
        return view('auth.forgot');
    }

    public function requestPassword(Request $request)
    {
        // dd($request->all());
        $url = config('global.url').'Account/ForgotPassword';

        $data = [
            'email' => $request->email,
        ];

        // dd($data);

        $response = Http::withToken(Session::get('token'))->post($url,$data);

        $created = json_decode($response->body());

        // dd($created);

        if(is_null($created))
        {
            return redirect()->back()->with('errors', 'An error occured.');
        }

        if($created->status_code !=200)
        {
            return redirect()->back()->with('errors', $created->message);
        }

        // dd($created);

        return redirect()->route('sign-in')->with('success', 'The password has been reset successfully.');


    }

    public function changePassword()
    {
        return view('auth.change');
    }

    public function resetPassword(Request $request)
    {
        // dd($request->all());
        $url = config('global.url').'Account/ChangePassword';

        $data = [
            'old_password' => $request->old_password,
            'new_password' => $request->new_password,
            'user_id' => (int)Session::get('user')->user_id
        ];

        // dd($data);

        $response = Http::withToken(Session::get('token'))->post($url,$data);

        $created = json_decode($response->body());

        // dd($created);

        if(is_null($created))
        {
            return redirect()->back()->with('errors', 'An error occured.');
        }

        if($created->status_code !=200)
        {
            return redirect()->back()->with('errors', $created->message);
        }

        // dd($created);

        return redirect()->route('sign-in')->with('success', 'The password has been changed successfully.');


    }

    public function logout()
    {
        Session::flush('token');
        Session::flush('user');

        return redirect()->route('home');
    }
}