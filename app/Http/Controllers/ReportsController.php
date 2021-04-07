<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Session;


class ReportsController extends Controller
{
    public function getAllObjections(Request $request){
        $url = config('global.url').'properties/?';

        $response = Http::withToken(Session::get('token'))->get($url);

        $created  = json_decode($response->body());

        // dd($created);


        if(is_null($created))
        {
            return redirect()->route('AllObjections')->with('errors', 'An error occured.');
        }

        if($created->count = 0)
        {
            return redirect()->route('AllObjections')->with('errors', 'Obtaining properties');
        }

        return view('content/objections', ['Objections' => $created->results]);
        // return view('usv')->with($lr_no);

    }

    public function getAllProperties(Request $request){
        $url = config('global.url').'properties/?';

        $response = Http::withToken(Session::get('token'))->get($url);

        $created  = json_decode($response->body());

        // dd($created);


        if(is_null($created))
        {
            return redirect()->route('AllProperty')->with('errors', 'An error occured.');
        }

        if($created->count = 0)
        {
            return redirect()->route('AllProperty')->with('errors', 'Obtaining properties');
        }

        return view('content/valuation-roll', ['properties' => $created->results]);
        // return view('usv')->with($lr_no);

    }

    public function getAllPayments(Request $request){
        $url = config('global.url').'/bills/?';

        $response = Http::withToken(Session::get('token'))->get($url);

        $created  = json_decode($response->body());

        // dd($created);


        if(is_null($created))
        {
            return redirect()->route('AllPayments')->with('errors', 'An error occured.');
        }

        if($created->count = 0)
        {
            return redirect()->route('AllPayments')->with('errors', 'Obtaining properties');
        }

        return view('content/payments', ['payments' => $created->results]);
        // return view('usv')->with($lr_no);

    }
}
