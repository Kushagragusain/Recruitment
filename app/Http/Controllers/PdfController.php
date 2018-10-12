<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use Illuminate\Support\Facades\DB;
use PDF;
use Auth;

class PdfController extends Controller
{
	public function __construct()
    {
        $this->middleware('auth');
    }

    	public function personalDownload()
    	{
    		$data['data'] = DB::table('Personaldetails')->where('user_id',Auth::id())->first();
    		//return view('detailsForm1Summary',compact('data'));
			$pdf = PDF::loadView('detailsForm1Summary',compact('data'));
			return $pdf->download('detailsForm1Summary.pdf');
    	}

    	public function educationDownload()
    	{
    		$data['data'] = DB::table('Educationdetails')->where('edu_id',Auth::id())->first();
			$pdf = PDF::loadView('detailsForm2Summary',compact('data'));
			return $pdf->download('detailsForm2Summary.pdf');
    	}

    	public function experienceDownlaod()
    	{
    		$data['data'] = DB::table('Experiencedetails')->where('exp_id',Auth::id())->first();
			$pdf = PDF::loadView('experienceFormSummary',compact('data'));
			return $pdf->download('experienceFormSummary.pdf');
    	}

		public function showSuccess()
		{
			DB::table('users')
        ->where("id", '=',  Auth::id())
        ->update(['visit'=> '1']);
			return view('invoice');
		}

		public function getData()
		{
			$data['data'] = DB::table('Creditpointssummarys')->where('creditsum_id',Auth::id())->first();	
				return view('creditPointSummary',compact('data'));
			//return view('creditPointSummary');
		}
		
		public function index()
		{
			$data['data'] = DB::table('Creditpointssummarys')->where('creditsum_id',Auth::id())->first();
			$pdf = PDF::loadView('creditPointSummary',compact('data'));
			return $pdf->download('creditPointSummary.pdf');
		}	
		public function upload()
		{
			$data['data'] = DB::table('Uploads')->where('upload_id',Auth::id())->first();
			$pdf = PDF::loadView('uploadSummary',compact('data'));
			return $pdf->download('uploadSummary.pdf');
		}	

}