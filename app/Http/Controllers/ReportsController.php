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
            return redirect()->route('AllObjections')->with('errors', 'An error occured.');
        }

        if($created->count = 0)
        {
            return redirect()->route('AllObjections')->with('errors', 'Obtaining properties');
        }

        $page = 1;

        Session::put('paginationCurrent', $page);
        Session::put('paginationNext', $created->next);
        Session::put('paginationPrev', $created->previous);

        return view('content/objections', ['Objections' => $created->results]);

        // return view('usv')->with($lr_no);

    }

    public function getAllWithdrawnObjections(Request $request){
        $url = config('global.url').'withdrawn_properties';

        $response = Http::withToken(Session::get('token'))->get($url);

        $created  = json_decode($response->body());

        // dd($created);


        if(is_null($created))
        {
            return redirect()->route('WithdrawnObjections')->with('errors', 'An error occured.');
        }

        if($created->count = 0)
        {
            return redirect()->route('WithdrawnObjections')->with('errors', 'Obtaining properties');
        }


        return view('content/withdrawn_objections', ['Objections' => $created->results]);
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

        $page = 1;

        Session::put('paginationCurrent', $page);
        Session::put('paginationNext', $created->next);
        Session::put('paginationPrev', $created->previous);

        return view('content/valuation-roll', ['properties' => $created->results]);
        // return view('usv')->with($lr_no);

    }

    public function getProperties($page){
        $url = config('global.url').'properties/?'.$page;

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

        Session::put('paginationCurrent', $page);
        Session::put('paginationNext', $created->next);
        Session::put('paginationPrev', $created->previous);

        return view('content/valuation-roll', ['properties' => $created->results]);

    }

    public function getPayments($page){
        $url = config('global.url').'bills/?'.$page;

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

        Session::put('paginationCurrent', $page);
        Session::put('paginationNext', $created->next);
        Session::put('paginationPrev', $created->previous);

        return view('content/payments', ['payments' => $created->results]);    

    }

    public function getObjections($page){
        $url = config('global.url').'property/objection/?'.$page;

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

        Session::put('paginationCurrent', $page);
        Session::put('paginationNext', $created->next);
        Session::put('paginationPrev', $created->previous);

        return view('content/objections', ['Objections' => $created->results]);

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

        if(strpos($lr_no, '-') !== false){
            $lr_no = str_replace("-", "/", $lr_no);
        }else{
            $lr_no = str_replace("+", "-", $lr_no);

        }

        $url = config('global.url').'search_objection/?q='.$lr_no;

        // dd($url);

        $response = Http::withToken(Session::get('token'))->get($url);

        $created  = json_decode($response->body());

        // dd($created);


        if(is_null($created))
        {
            return redirect()->back()->with('errors', 'An error occured.');
        }

        return view('content/objectiondoc', ['ObjectionDetails' => $created]);
        // return view('usv')->with($lr_no);
    }

    public function getClientLogs(Request $request){
        $url = config('global.url').'user_logs/?q=county_client';

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

    public function getSearchedBill(Request $request){
        // dd($request->all());

        $url = config('global.url').'bills/?q='.$request->billNumber;

        $response = Http::withToken(Session::get('token'))->get($url);

        $created  = json_decode($response->body());

        // dd($created);

        if(is_null($created))
        {
            return redirect()->route('getAllPayments')->with('errors', 'An error occured.');
        }

        return view('content/searched_bill', ['payments' => $created->results]);
    }

    public function getSearchedObjection(Request $request){
        // dd($request->all());

        $url = config('global.url').'search_objection/?q='.$request->billNumber;

        $response = Http::withToken(Session::get('token'))->get($url);

        $created  = json_decode($response->body());

        // dd($created);

        if(is_null($created))
        {
            return redirect()->route('getAllObjections')->with('errors', 'An error occured.');
        }

        return view('content/searched_objection', ['Objections' => $created]);
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
