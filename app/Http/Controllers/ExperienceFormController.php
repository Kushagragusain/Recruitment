<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use Illuminate\Support\Facades\DB;
use Auth;

class ExperienceFormController extends Controller
{
	public function __construct()
    {
        $this->middleware('auth');
    }
    public function saveExperience(Request $request)
    {
    	$users = DB::table('Experiencedetails')->where('exp_id',Auth::id())->first();
        $edit = DB::table('Givepoints')->where('give_id','1')->first();

        $this->validate($request, [
            'academic_position' => 'required|string|max:255',
            'academic_years_exp' => 'required|digits:1',
            'academic_months_exp' => 'required|digits:1',
            'academic_institution_name' => 'required|string|max:255',
            'industrial_position' => 'required|string|max:255',
            'industrial_years_exp' => 'required|digits:1',
            'industrial_months_exp' => 'required|digits:1',
            'industrial_institution_name' => 'required|string|max:255',
            'research_position' => 'required|string|max:255',
            'research_years_exp' => 'required|digits:1',
            'research_months_exp' => 'required|digits:1',
            'research_institution_name' => 'required|string|max:255',
        ]);

    	if($edit->editExperience== 0)
    	{
    	$academic_position = $request->input('academic_position');
		$academic_institution_name = $request->input('academic_institution_name');
		$academic_years_exp = $request->input('academic_years_exp');
		$academic_months_exp = $request->input('academic_months_exp');
		$industrial_position = $request->input('industrial_position');
		$industrial_institution_name = $request->input('industrial_institution_name');
		$industrial_years_exp = $request->input('industrial_years_exp');
		$industrial_months_exp = $request->input('industrial_months_exp');
		$research_position = $request->input('research_position');
		$research_institution_name = $request->input('research_institution_name');
		$research_years_exp = $request->input('research_years_exp');
		$research_months_exp = $request->input('research_months_exp');
		
		$data = array('academic_position'=>$academic_position,"academic_institution_name"=>$academic_institution_name,"academic_years_exp"=>$academic_years_exp,"academic_months_exp"=>$academic_months_exp,'industrial_position'=>$industrial_position,"industrial_institution_name"=>$industrial_institution_name,"industrial_years_exp"=>$industrial_years_exp,"industrial_months_exp"=>$industrial_months_exp,'research_position'=>$research_position,"research_institution_name"=>$research_institution_name,"research_years_exp"=>$research_years_exp,"research_months_exp"=>$research_months_exp);
		
		DB::table('Experiencedetails')->insert($data);
         
                 DB::table('Experiencedetails')
        ->where("exp_id", '=', Auth::id())
        ->update(['editExperience'=> '1']);
        return redirect('creditTable/creditShow');
		
        }
		
        else
		{
			DB::table('Experiencedetails')->where('exp_id',Auth::id())->update(array(
        
            'academic_position'   => $request->input('academic_position'),
            'academic_institution_name'           => $request->input('academic_institution_name'),
            'academic_years_exp' 			   => $request->input('academic_years_exp'),
            'academic_months_exp'      => $request->input('academic_months_exp'),
            'industrial_position'     => $request->input('industrial_position'),
            'industrial_institution_name'       => $request->input('industrial_institution_name'),
            'industrial_years_exp'         => $request->input('industrial_years_exp'),
            'industrial_months_exp'   => $request->input('industrial_months_exp'),
            'research_position'=> $request->input('research_position'),
            'research_institution_name'         => $request->input('research_institution_name'),
            'research_years_exp'   => $request->input('research_years_exp'),
            'research_months_exp'=> $request->input('research_months_exp'),
)
        
    );
            return redirect('creditTable/creditShow');
		}

		
    }

    public function showExperience()
    {
    	return view('experienceForm');
    }
}
