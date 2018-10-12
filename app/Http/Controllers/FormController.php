<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use Illuminate\Support\Facades\DB;
use Auth;
use App\file;
use App\Upload;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Storage;


class FormController extends Controller
{
	public function __construct()
    {
        $this->middleware('auth');
    }

    public function saveUpload(Request $request)
    {
        $edit= DB::table('Givepoints')->where('give_id',Auth::id())->first();
        $user = DB::table('users')->where('id',Auth::id());

        if($edit->editUpload == 0)
        {
        if($request->hasFile('candidate_image'))
        {
              $request->file('candidate_image');
              $candidate_image = $request->candidate_image->store(''); 

        }
        if($request->hasFile('candidate_sign'))
        {  
              $request->file('candidate_sign');
              $candidate_sign = $request->candidate_sign->store(''); 
        }
       
        $data=array('candidate_image'=>$candidate_image,'candidate_sign'=>$candidate_sign);
         DB::table('Uploads')->insert($data);

         DB::table('Uploads')
                    ->where("upload_id", '=',Auth::id())
                            ->update(['editUpload'=> '1']);
         return redirect('uploads/showOne');
       
        }
       
        else
        {
            if($request->hasFile('candidate_image'))
        {
          
              $request->file('candidate_image');    
              $candidate_image = $request->candidate_image->store('');      
               // return $candidate_image;    
        }
        
        if($request->hasFile('candidate_sign'))
        { 
         
              $request->file('candidate_sign');
              $candidate_sign = $request->candidate_sign->store(''); 
        }
      
            DB::table('Uploads')->where('upload_id',Auth::id())->update(array(      
            'candidate_image'   => $candidate_image,
            'candidate_sign'    => $candidate_sign,  
        )
    );
            return redirect('uploads/showOne');
        }
        
    }

    public function saveOne(Request $request)
    {	
    	$edit = DB::table('Givepoints')->where('give_id','1')->first();
        
        $this->validate($request, [
            'candidate_name' => 'required|max:255',
            'gender' => 'required|string|max:255',
            'father_name' => 'required|string|max:255',
            'post_applied' => 'required|string|max:255',
            'department' => 'required|string|max:255',
            'category' => 'required|string|max:255',
            'marital_status' => 'required|string|max:255',
            'Permanent_address' => 'required|string|max:255',
        ]);

        if($edit->editPersonal == 0)
    	{
    	$candidate_name = $request->input('candidate_name');
		$gender = $request->input('gender');
		$DOB = $request->input('DOB');
		$father_name = $request->input('father_name');
		$post_applied = $request->input('post_applied');
		$department = $request->input('department');
		$category = $request->input('category');
		$marital_status = $request->input('marital_status');
		$Permanent_address = $request->input('Permanent_address');
		$data=array('candidate_name'=>$candidate_name,"gender"=>$gender, "DOB"=>$DOB,"father_name"=>$father_name,"post_applied"=>$post_applied,'department'=>$department,"category"=>$category,"marital_status"=>$marital_status,"Permanent_address"=>$Permanent_address);
		
        DB::table('Personaldetails')->insert($data);
              
              DB::table('Personaldetails')
                    ->where("user_id", '=', Auth::id())
                            ->update(['editPersonal'=> '1']);

		return redirect('detailsform2/showTwo');
		
        }
		
        else
        {
            
			//make update query here;
			DB::table('Personaldetails')->where('user_id',Auth::id())->update(array(
        
            'candidate_name'   => $request->input('candidate_name'),
            'gender'           => $request->input('gender'),
            'DOB' 			   => $request->input('DOB'),
            'father_name'      => $request->input('father_name'),
            'post_applied'     => $request->input('post_applied'),
            'department'       => $request->input('department'),
            'category'         => $request->input('category'),
            'marital_status'   => $request->input('marital_status'),
            'Permanent_address'=> $request->input('Permanent_address')
        )
    );
            return redirect('detailsform2/showTwo');
		}
    }
    public function showTwo()
    {
    	return view('detailsForm2');
    }
    public function showOne()
    {
        return view('detailsform1');
    }

    public function saveTwo(Request $request)
    {
    	$users = DB::table('Educationdetails')->where('edu_id',Auth::id())->first();
        $edit = DB::table('Givepoints')->where('give_id','1')->first();

        $this->validate($request, [
            'phd_stream' => 'required|string|max:255',
            'phd_marks' => 'required|digits_between:1,2',
            'phd_passing_year' => 'required|digits:4',
            'phd_university' => 'required|string|max:255',
            'pg_stream' => 'required|string|max:255',
            'pg_marks' => 'required|digits_between:1,2',
            'pg_passing_year' => 'required|digits:4',
            'pg_university' => 'required|string|max:255',
            'ug_stream' => 'required|string|max:255',
            'ug_marks' => 'required|digits_between:1,2',
            'ug_passing_year' => 'required|digits:4',
            'ug_university' => 'required|string|max:255',
            'inter_stream' => 'required|string|max:255',
            'inter_marks' => 'required|digits_between:1,2',
            'inter_passing_year' => 'required|digits:4',
            'inter_university' => 'required|string|max:255',
            'high_school_stream' => 'required|string|max:255',
            'high_school_marks' => 'required|digits_between:1,2',
            'high_school_passing_year' => 'required|digits:4',
            'high_school_university' => 'required|string|max:255',
            'phd_title' => 'required|string|max:255',
            'phd_field_spec' => 'required|string|max:255',
        ]);

    	if($edit->editEducation == 0)
    	{
    	$phd_stream = $request->input('phd_stream');
		$phd_marks = $request->input('phd_marks');
		$phd_passing_year = $request->input('phd_passing_year');
		$phd_university = $request->input('phd_university');
		$pg_stream = $request->input('pg_stream');
		$pg_marks = $request->input('pg_marks');
		$pg_passing_year = $request->input('pg_passing_year');
		$pg_university = $request->input('pg_university');
		$ug_stream = $request->input('ug_stream');
		$ug_marks = $request->input('ug_marks');
		$ug_passing_year = $request->input('ug_passing_year');
		$ug_university = $request->input('ug_university');
		$inter_stream = $request->input('inter_stream');
		$inter_marks = $request->input('inter_marks');
		$inter_passing_year = $request->input('inter_passing_year');
		$inter_university = $request->input('inter_university');
		$high_school_stream = $request->input('high_school_stream');
		$high_school_marks = $request->input('high_school_marks');
		$high_school_passing_year = $request->input('high_school_passing_year');
		$high_school_university = $request->input('high_school_university');
		$phd_title = $request->input('phd_title');
		$phd_field_spec = $request->input('phd_field_spec');
		
        $data=array('phd_stream'=>$phd_stream,"phd_marks"=>$phd_marks,"phd_passing_year"=>$phd_passing_year,"phd_university"=>$phd_university,'pg_stream'=>$pg_stream,"pg_marks"=>$pg_marks,"pg_passing_year"=>$pg_passing_year,"pg_university"=>$pg_university,'ug_stream'=>$ug_stream,"ug_marks"=>$ug_marks,"ug_passing_year"=>$ug_passing_year,"ug_university"=>$ug_university,'inter_stream'=>$inter_stream,"inter_marks"=>$inter_marks,"inter_passing_year"=>$inter_passing_year,"inter_university"=>$inter_university,'high_school_stream'=>$high_school_stream,"high_school_marks"=>$high_school_marks,"high_school_passing_year"=>$high_school_passing_year,"high_school_university"=>$high_school_university,'phd_title'=>$phd_title,"phd_field_spec"=>$phd_field_spec);
		
                DB::table('Educationdetails')->insert($data);

                DB::table('Educationdetails')
                 ->where("edu_id", '=', Auth::id())
                   ->update(['editEducation'=> '1']);
            return redirect('experienceForm/showExperience');
        		
        }
		
        else
		
        {
		
        DB::table('Educationdetails')->where('edu_id',Auth::id())->update(array(
        
            'phd_stream'   => $request->input('phd_stream'),
            'phd_marks'           => $request->input('phd_marks'),
            'phd_passing_year' 			   => $request->input('phd_passing_year'),
            'phd_university'      => $request->input('phd_university'),
            'pg_stream'     => $request->input('pg_stream'),
            'pg_marks'       => $request->input('pg_marks'),
            'pg_passing_year'         => $request->input('pg_passing_year'),
            'pg_university'   => $request->input('pg_university'),
            'ug_stream'=> $request->input('ug_stream'),
            'ug_marks'   => $request->input('ug_marks'),
            'phd_marks'           => $request->input('phd_marks'),
            'ug_passing_year' 			   => $request->input('ug_passing_year'),
            'ug_university'      => $request->input('ug_university'),
            'inter_stream'     => $request->input('inter_stream'),
            'inter_marks'       => $request->input('inter_marks'),
            'inter_passing_year'         => $request->input('inter_passing_year'),
            'inter_university'   => $request->input('inter_university'),	
            'high_school_stream'   => $request->input('high_school_stream'),
            'high_school_marks'           => $request->input('high_school_marks'),
            'high_school_passing_year' 			   => $request->input('high_school_passing_year'),
            'high_school_university'      => $request->input('high_school_university'),
            'phd_title'     => $request->input('phd_title'),
            'phd_field_spec'       => $request->input('phd_field_spec'),
     
        )
    );
        return redirect('experienceForm/showExperience');
	}
	
    }
}
