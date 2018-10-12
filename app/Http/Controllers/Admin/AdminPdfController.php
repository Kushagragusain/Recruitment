<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Requests;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use PDF;
use View;
class AdminPdfController extends Controller
{

		public function __construct()
    	{
        $this->middleware('auth:admin');
    	}

		public function pdfGet()
		{
			//$data1['data1'] = DB::table('creditpointssummary')->get();
			$data = DB::table('users')
            ->join('Creditpointssummarys', 'users.id', '=', 'Creditpointssummarys.creditsum_id')
            ->select('users.name', 'Creditpointssummarys.total_Credit_Points')
            ->get();

				return View('adminPdfView',compact('data')); 
			
		}
		
		public function index()
		{
			$data = DB::table('users')
            ->join('Creditpointssummarys', 'users.id', '=', 'Creditpointssummarys.creditsum_id')
            ->select('users.name', 'Creditpointssummarys.total_Credit_Points')
            ->get();
			$pdf = PDF::loadView('adminPdfView',compact('data'));
			return $pdf->download('adminPdfView.pdf');
		}	

}