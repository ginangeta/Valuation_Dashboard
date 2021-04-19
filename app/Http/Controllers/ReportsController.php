<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Session;


class ReportsController extends Controller
{
    public function getAllObjections(Request $request){
        $url = config('global.url').'property/objection';

        $response = Http::withToken(Session::get('token'))->get($url);

        $created  = json_decode($response->body());

        // dd($created);


        if(is_null($created))
        {
            return redirect()->route('getAllObjections')->with('errors', 'An error occured.');
        }

        if($created->success == false)
        {
            return redirect()->route('getAllObjections')->with('errors', 'Obtaining properties');
        }

        return view('content/objections', ['Objections' => $created->data]);
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


        // dd(Session::get('token'));

        if(is_null($created))
        {
            return redirect()->route('AllPayments')->with('errors', 'An error occured.');
        }

        if($created->count = 0)
        {
            return redirect()->route('AllPayments')->with('errors', 'Obtaining properties');
        
        }
       
            // dd($created->results);

        return view('content/payments', ['payments' => $created->results]);    
        // return view('usv')->with($lr_no);

    }

    public function singleobjection($lr_no){
        $url = config('global.url').'property/objection/?q='.$lr_no;

        $response = Http::withToken(Session::get('token'))->get($url);

        $created  = json_decode($response->body());

        // dd($created);


        if(is_null($created))
        {
            return redirect()->back()->with('errors', 'An error occured.');
        }

        if($created->success != true)
        {
            return redirect()->back()->with('errors', 'Obtaining property objection failed');
        }

        return view('content/objectiondoc', ['ObjectionDetails' => $created->data[0]]);
        // return view('usv')->with($lr_no);
    }

    public function getClientLogs(Request $request){
        $url = config('global.url').'client_logs';

        $response = Http::withToken(Session::get('token'))->get($url);

        $created  = json_decode($response->body());

        // dd($created);


        if(is_null($created))
        {
            return redirect()->route('getClientLogs')->with('errors', 'An error occured.');
        }

        if($created->success == false)
        {
            return redirect()->route('getClientLogs')->with('errors', 'Obtaining properties');
        }

        return view('content/client_logs', ['ClientLogs' => $created->data]);
        // return view('usv')->with($lr_no);

    }

    public function getSearchedProperties(Request $request){
        $url = config('global.url').'properties_searched';

        $response = Http::withToken(Session::get('token'))->get($url);

        $created  = json_decode($response->body());

        // dd($created);


        if(is_null($created))
        {
            return redirect()->route('getSearchedProperties')->with('errors', 'An error occured.');
        }

        return view('content/searched_properties', ['SearchedProperties' => $created]);
        // return view('usv')->with($lr_no);

    }

    public function getAllTowns(Request $request){
        $url = config('global.url').'towns/';

        $response = Http::withToken(Session::get('token'))->get($url);

        $created  = json_decode($response->body());

        // dd($created);


        if(is_null($created))
        {
            return redirect()->route('getAllTowns')->with('errors', 'An error occured.');
        }

        if($created->count < 0)
        {
            return redirect()->route('getAllTowns')->with('errors', 'Failed to obtain towns');
        }

        return view('content/towns', ['Towns' => $created->results]);
        // return view('usv')->with($lr_no);

    }

    public function addTown(Request $request){
        // dd($request->all());
        $url = config('global.url').'towns/';
        // dd($url);

        $data = [
            'name' => $request->Addtown,
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


        return redirect()->back()->with('success', 'Town Created');
        

        // dd($created);
    }
}
