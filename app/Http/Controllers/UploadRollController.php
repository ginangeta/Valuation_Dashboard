<?php


namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Session;

class UploadRollController extends Controller
{
    public function uploadRoll(Request $request){
        // dd($request->all());
        $url = config('global.url').'uploaded_files/';

        $data = [
            'token' => Session::get('token'),
            'file_name' => $request->upload_roll,
        ];

        // dd($data);
                
        $created = json_decode($this->to_curl($url, $data));
        // $response = Http::withToken(Session::get('token'))->post($url,$data);

        dd($created);

        if(is_null($created))
        {
            return redirect()->route('AddProperty')->with('errors', 'An error occured.');
        }

        if($created->success = false)
        {
            return redirect()->back()->with('errors', $created->msg);
        }

        if(is_null($created->data)){
            dd($created);
        }

        return redirect()->back()->with('success', $created->msg);

    }

    public function to_curl($url, $data){
        $headers = array(
            'Content-Type: application/json',
            'Authorization: JWT ' .$data['token'],
            'api-key:7935cf09148cbce9794db37be028260a',
            'Content-Length: ' . strlen(json_encode($data))
        );
        
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
        curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($data));
        $output = curl_exec($ch);
        // dd($output);
        if (curl_errno($ch))
        {
            print "Error: " . curl_error($ch);
        }
        else
        {
            return $output;
        }
    }
}
