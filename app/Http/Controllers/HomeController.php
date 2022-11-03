<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class HomeController extends Controller
{
    public function index() {
        return view('index');
    }
    public function searchDate(Request $request) {
        $data = $request->all();
        if ($data['from'] == null || $data['to'] == null) {
            return view('index', ['result' => null]);
        }
        $items = DB::table('tblmstaff')->selectRaw('ID,Name,Email, Entry_Date, DAYNAME(Entry_Date) as Date')->whereBetween('Entry_Date',array($data['from'],$data['to']))->get();
        return view('result', ['result' => $items]);
    }
    public function clear()
    {
        return view('index');
    }
    public function sendMail(Request $request) {
        if ($request->data == null)
            return redirect('/');
        $data = $request->data;
        $data = json_decode($data);
        $email = $request->email;
        \Mail::to($email)->send(new \App\Mail\SendMail([
            'data' => $data
        ]));
    }
    public function exportPdf(Request $request) {

        
        $data = $request->data;

        $data = json_decode($data);	
        if (count($data) == 0)
            session()->put('error', "No data, cannot export");
            return redirect('/');
    	$pdf = \PDF::loadView('export', ['data'=>$data]);
    		return $pdf->download('export.pdf');
    }
}
