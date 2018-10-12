<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Requests;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use PDF;
use View;

class AdminEditController extends Controller
{
	public function __construct()
    {
        $this->middleware('auth:admin');
    }
    public function saveEdit(Request $request)
    {
    	//$users = DB::table('Givepoints')->where('give_id',Auth::id())->first();

			DB::table('Givepoints')->where('give_id','1')->update(array(
        
            'Ext_Spons_RD_PI_point'   => $request->input('Ext_Spons_RD_PI_point'),
            'Ext_Spons_RD_COPI_point'           => $request->input('Ext_Spons_RD_COPI_point'),
            'patent_granted_PI_point' 			   => $request->input('patent_granted_PI_point'),
            'patent_granted_COPI_point'      => $request->input('patent_granted_COPI_point'),
            'Consult_Proj_PI_point'     => $request->input('Consult_Proj_PI_point'),
            'phd_sole_super_point'       => $request->input('phd_sole_super_point'),
            'phd_First_super_point'         => $request->input('phd_First_super_point'),
            'phd_co_super_point'   => $request->input('phd_co_super_point'),
            'Jour_main_author_point'=> $request->input('Jour_main_author_point'),
            'Jour_co_author_point'         => $request->input('Jour_co_author_point'),
            'Confer__main_author_point'   => $request->input('Confer__main_author_point'),
            'conference_co_author_point'=> $request->input('conference_co_author_point'),
            'HOD_point'   => $request->input('HOD_point'),
            'DEAN_point'  => $request->input('DEAN_point'),
            'Cheif_Warden_point'              => $request->input('Cheif_Warden_point'),
            'Prof_TnP_point'      => $request->input('Prof_TnP_point'),
            'Advisor_estate_point'     => $request->input('Advisor_estate_point'),
            'CVO_point'       => $request->input('CVO_point'),
            'PI_exam_point'         => $request->input('PI_exam_point'),
            'TEQUIP_coordinator_point'   => $request->input('TEQUIP_coordinator_point'),
            'Warden_point'=> $request->input('Warden_point'),
            'AsstWarden_point'         => $request->input('AsstWarden_point'),
            'Associate_Dean_point'   => $request->input('Associate_Dean_point'),
            'Chair_academic_comm_point'=> $request->input('Chair_academic_comm_point'),
            'Comp_Centre_incharge_point'   => $request->input('Comp_Centre_incharge_point'),
            'IT_services_incharge_point'  => $request->input('IT_services_incharge_point'),
            'Library_incharge_point'              => $request->input('Library_incharge_point'),
            'Admission_incharge_point'      => $request->input('Admission_incharge_point'),
            'Stud_Act_incharge_point'     => $request->input('Stud_Act_incharge_point'),
            'Other_incharge_point'       => $request->input('Other_incharge_point'),
            'Chair_Con_Standing_Comm_point'   => $request->input('Chair_Con_Standing_Comm_point'),
            'Dept_Activity_HOD_point'   => $request->input('Dept_Activity_HOD_point'),
            'Workshop_Coordinator_point'=> $request->input('Workshop_Coordinator_point'),
            'Nat_Prog_Two_Weeks_point'         => $request->input('Nat_Prog_Two_Weeks_point'),
            'Nat_Prog_One_Weeks_point'   => $request->input('Nat_Prog_One_Weeks_point'),
            'Nat_Conf_Organized_point'=> $request->input('Nat_Conf_Organized_point'),
            'Length_service_point'   => $request->input('Length_service_point'),
            'Est_Lab_point'  => $request->input('Est_Lab_point'),
            'Theory_Teaching_point'              => $request->input('Theory_Teaching_point'),
            'PG_Dist_Guided_point'      => $request->input('PG_Dist_Guided_point'),
            'UG_Projects_point'     => $request->input('UG_Projects_point'),
            'Book_Pub_Inter_point'       => $request->input('Book_Pub_Inter_point'),
            'Book_Pub_Nat_point'         => $request->input('Book_Pub_Nat_point'),
            'Outreach_Inst_activity_point'   => $request->input('Outreach_Inst_activity_point'),
            'Fellow_IEEE_point'=> $request->input('Fellow_IEEE_point'),
            'Plac_Per_Eight_point'         => $request->input('Plac_Per_Eight_point'),
            'Plac_per_Seventy_point'   => $request->input('Plac_per_Seventy_point'),

        )
    );
            

		return redirect('admin/adminhome');
    }

    public function showEdit()
    {
    	return view('admineditpoints');
    }
}
