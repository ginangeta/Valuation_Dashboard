<?php

namespace App\Http\Controllers;

use App;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Session;
use Barryvdh\Snappy\Facades\SnappyPdf as SnappyPDF;

class PdfController extends Controller
{
    public function exportPdf() {
        $pdf = PDF::loadView('content/objections'); // <--- load your view into theDOM wrapper;
        $path = public_path('pdf_docs/'); // <--- folder to store the pdf documents into the server;
        $fileName =  time().'.'. 'pdf' ; // <--giving the random filename,
        $pdf->save($path . '/' . $fileName);
        $generated_pdf_link = url('pdf_docs/'.$fileName);
        return response()->json($generated_pdf_link);
    }

    public function printObjections($url){
        if(strpos($url, '-') !== false){
            $url = str_replace("-", "/", $url);
        }else{
            $url = str_replace("+", "-", $url);

        }

        $response = Http::withToken(Session::get('token'))->get($url);
        $created  = json_decode($response->body());

        dd($created);

        $amountOfTime = 100;
        ini_set('max_execution_time', $amountOfTime);

        $html = '';
        $fileName = Session::get('paginationCurrent');

        $Objections = $created->results;
        foreach($Objections as $key => $ObjectionDetails)
        {
            if($ObjectionDetails->status__name === 'Paid'){
            $ReasonsCount =  count($ObjectionDetails->reasons);
            $view = view('content.massprint')->with(compact('ObjectionDetails', 'ReasonsCount'));
            $html .= $view->render();
            // PDF::loadHTML($html)->save(public_path().'/bulk_objections/'.$ObjectionDetails->property->lr_no.'.pdf');

            }
        }
        // dd($html);
        $Snappy = SnappyPDF::loadHTML($html);
        // $Snappy->setOption('disable-smart-shrinking', true);
        $Snappy->setPaper('a4');
        $Snappy->setOption('zoom', 1);
        $Snappy->setOption('margin-left', 0);
        $Snappy->setOption('margin-right', 0);
        $Snappy->setOption('margin-top', 0);
        $Snappy->setOption('margin-bottom', 0);
        $Snappy->setOption('lowquality', false);

        return $Snappy->inline('Objections '.$fileName.'.pdf');

    }

    public function printNextObjections($url){
        if(strpos($url, '-') !== false){
            $url = str_replace("-", "/", $url);
        }else{
            $url = str_replace("+", "-", $url);

        }

        $response = Http::withToken(Session::get('token'))->get($url);
        $created  = json_decode($response->body());

        // dd($created);

        $amountOfTime = 100;
        ini_set('max_execution_time', $amountOfTime);

        $html = '';
        $fileName = Session::get('paginationCurrent');

        $Objections = $created->results;
        foreach($Objections as $key => $ObjectionDetails)
        {
            if($ObjectionDetails->status__name === 'Paid'){
            $ReasonsCount =  count($ObjectionDetails->reasons);
            $view = view('content.massprint')->with(compact('ObjectionDetails', 'ReasonsCount'));
            $html .= $view->render();
            // PDF::loadHTML($html)->save(public_path().'/bulk_objections/'.$ObjectionDetails->property->lr_no.'.pdf');

            }
        }
        // dd($html);
        $Snappy = SnappyPDF::loadHTML($html);
        // $Snappy->setOption('disable-smart-shrinking', true);
        $Snappy->setPaper('a4');
        $Snappy->setOption('zoom', 1);
        $Snappy->setOption('margin-left', 0);
        $Snappy->setOption('margin-right', 0);
        $Snappy->setOption('margin-top', 0);
        $Snappy->setOption('margin-bottom', 0);
        $Snappy->setOption('lowquality', false);

        return $Snappy->inline('Objections '.$fileName.'.pdf');

    }

    public function printSearchedObjections($url){
        if(strpos($url, '-') !== false){
            $url = str_replace("-", "/", $url);
        }else{
            $url = str_replace("+", "-", $url);

        }

        $response = Http::withToken(Session::get('token'))->get($url);
        $created  = json_decode($response->body());

        // dd($created);

        $amountOfTime = 100;
        ini_set('max_execution_time', $amountOfTime);

        $html = '';
        $fileName = Session::get('paginationCurrent');

        $Objections = $created->results;
        foreach($Objections as $key => $ObjectionDetails)
        {
            if($ObjectionDetails->status__name === 'Paid'){
            $ReasonsCount =  count($ObjectionDetails->reasons);
            $view = view('content.massprint')->with(compact('ObjectionDetails', 'ReasonsCount'));
            $html .= $view->render();
            // PDF::loadHTML($html)->save(public_path().'/bulk_objections/'.$ObjectionDetails->property->lr_no.'.pdf');

            }
        }
        // dd($html);
        $Snappy = SnappyPDF::loadHTML($html);
        // $Snappy->setOption('disable-smart-shrinking', true);
        $Snappy->setPaper('a4');
        $Snappy->setOption('zoom', 1);
        $Snappy->setOption('margin-left', 0);
        $Snappy->setOption('margin-right', 0);
        $Snappy->setOption('margin-top', 0);
        $Snappy->setOption('margin-bottom', 0);
        $Snappy->setOption('lowquality', false);

        return $Snappy->inline('Objections '.$fileName.'.pdf');

    }

    function failedMakePDF(){
        // if(strpos($url, '-') !== false){
        //     $url = str_replace("-", "/", $url);
        // }else{
        //     $url = str_replace("+", "-", $url);

        // }

        // $amountOfTime = 600;
        // ini_set('max_execution_time', $amountOfTime);
        // dd($url);

        // $response = Http::withToken(Session::get('token'))->get($url);
        // $created  = json_decode($response->body());

        // dd($created);

        // $html = '';
        // $fileName = Session::get('paginationCurrent');

        // $pdf = App::make('dompdf.wrapper');
        // $pdf->loadHTML('<h1>Test</h1>');
        // return $pdf->stream('Objections Page'.$fileName.'.pdf');

        // $Objections = $created->results;
        // foreach($Objections as $key => $ObjectionDetails)
        // {
        //     if($ObjectionDetails->status__name === 'Paid'){
        //     $view = view('content.printobjectiondoc')->with(compact('ObjectionDetails'));
        //     $html .= $view->render();
        //     // PDF::loadHTML($html)->save(public_path().'/bulk_objections/'.$ObjectionDetails->property->lr_no.'.pdf');

        //     }
        // }
        // dd($html);

        // $pdf = App::make('dompdf.wrapper');
        // $pdf->loadHTML($html);
        // return $pdf->stream('Objections Page'.$fileName.'.pdf');

        // $pdf = App::make('snappy.pdf.wrapper');
        // $pdf->loadHTML($html);
        // return $pdf->inline('Objections Page'.$fileName.'.pdf')->setPaper('a4');



        // return SnappyPDF::loadHTML($html)->setPaper('a4')->setOption('disable-smart-shrinking', true)->setOption('margin-bottom', 0)->inline('myfile.pdf');

        // $pdf = PDF::loadHTML($html);  
        // // $sheet = $pdf->setPaper('a4')->download('Page'.$fileName.'.pdf');
        // $sheet = $pdf->stream('Page'.$fileName.'.pdf');
        // // $sheet = $pdf->download('Page'.$fileName.'.pdf');
        // // dd($sheet);
        // return $sheet;
        // // return view('usv')->with($lr_no);

    }
}
