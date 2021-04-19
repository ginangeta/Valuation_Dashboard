<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Redirect;

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

        foreach($created->data->roles as $array){
            if($array->name === 'county_client'){
                return Redirect::to('https://test.nairobicitycounty.ke/');
                // return redirect()->back()->with('errors', 'You have to be an admin to access this site.');
            }
        }

        Session::put('user', $created->data);

        Session::put('token', $created->data->token);
        
        return redirect()->route('dashboard');
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

    public function changePassword(Request $request)
    {
        // dd($request->all());
        $url = config('global.url').'user/change_password/';
        // dd($url);

        $data = [
            'email' => $request->Reset_email,
            'password' => $request->Sent_password,
            'new_password' => $request->Reset_password
        ];

        // dd($data);

        $response = Http::post($url,$data);
        // dd($response);

        $created = json_decode($response->body());

        // dd($created);

        if(is_null($created))
        {
            return redirect()->view('change-password')->with('errors', 'An error occured.');
        }

        if(!$created->success)
        {
            return redirect()->route('auth.login')->with('errors', $created->msg);
        }

        // dd($created);

        return redirect()->route('home')->with('success', 'The password has been reset successfully.');

    }   
    public function resetPassword(Request $request)
    {
        // dd($request->all());
        $url = config('global.url').'user/forgot_password/';
        // dd($url);

        $data = [
            'email' => $request->Forgot_email,
        ];

        // dd($data);

        $response = Http::post($url,$data);
        // dd($response);

        $created = json_decode($response->body());

        // dd($created);

        if(is_null($created))
        {
            return redirect()->back()->with('errors', 'An error occured.');
        }

        if(!$created->success)
        {
            return redirect()->back()->with('errors', $created->msg);
        }

        // dd($created);

        return view('auth.change-password')->with('success', $created->msg);


    }

    public function logout()
    {
        Session::flush('token');
        Session::flush('user');

        return redirect()->route('home');
    }
}