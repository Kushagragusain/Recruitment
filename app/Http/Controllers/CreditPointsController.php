<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests;
use Illuminate\Support\Facades\DB;
use Auth;
use Redirect;


class CreditPointsController extends Controller
{

	public function __construct()
    {
        $this->middleware('auth');
    }
	public function creditSave(Request $request)
	
	{
		$edit = DB::table('Givepoints')->where('give_id','1')->first();
    	
    	if($edit->editCredit == 0)
   		{
					$Ext_Spons_RD_PI = $request->input('Ext_Spons_RD_PI');
					$Ext_Spons_RD_COPI = $request->input('Ext_Spons_RD_COPI');
					$Mem_Spons_RD = $request->input('Mem_Spons_RD');
					$Spons_RD_PIORNOT = $request->input('Spons_RD_PIORNOT');
					$patent_granted_PI = $request->input('patent_granted_PI');
					$patent_granted_COPI = $request->input('patent_granted_COPI');
					$Mem_patent_granted = $request->input('Mem_patent_granted');
					$Patent_PIORNOT = $request->input('Patent_PIORNOT');
					$Consult_Proj_PI = $request->input('Consult_Proj_PI');
					$phd_sole_super = $request->input('phd_sole_super');
					$phd_First_super = $request->input('phd_First_super');
					$phd_co_super = $request->input('phd_co_super');
					$Mem_phd_co_super = $request->input('Mem_phd_co_super');
					$Jour_main_author = $request->input('Jour_main_author');
					$Jour_co_author = $request->input('Jour_co_author');
					$Mem_Jour_co_author = $request->input('Mem_Jour_co_author');
					$Confer__main_author = $request->input('Confer__main_author');
					$conference_co_author = $request->input('conference_co_author');
					$Mem_conference_co_author = $request->input('Mem_conference_co_author');
					$Confer_PIORNOT = $request->input('Confer_PIORNOT');
					$HOD = $request->input('HOD');
					$DEAN = $request->input('DEAN');
					$Cheif_Warden = $request->input('Cheif_Warden');
					$Prof_TnP = $request->input('Prof_TnP');
					$Advisor_estate = $request->input('Advisor_estate');
					$CVO = $request->input('CVO');
					$PI_exam = $request->input('PI_exam');
					$TEQUIP_coordinator = $request->input('TEQUIP_coordinator');
					$Warden = $request->input('Warden');
					$AsstWarden = $request->input('AsstWarden');
					$Associate_Dean = $request->input('Associate_Dean');
					$Chair_academic_comm = $request->input('Chair_academic_comm');
					$Comp_Centre_incharge = $request->input('Comp_Centre_incharge');
					$IT_services_incharge = $request->input('IT_services_incharge');
					$Library_incharge = $request->input('Library_incharge');
					$Admission_incharge = $request->input('Admission_incharge');
					$Stud_Act_incharge = $request->input('Stud_Act_incharge');
					$Other_incharge = $request->input('Other_incharge');
					$Chair_Con_Standing_Comm = $request->input('Chair_Con_Standing_Comm');
					$Dept_Activity_HOD = $request->input('Dept_Activity_HOD');
					$Workshop_Coordinator = $request->input('Workshop_Coordinator');
					$Nat_Prog_Two_Weeks = $request->input('Nat_Prog_Two_Weeks');
					$Nat_Prog_One_Weeks = $request->input('Nat_Prog_One_Weeks');
					$Nat_Conf_Organized = $request->input('Nat_Conf_Organized');
					$Length_service = $request->input('Length_service');
					$Est_Lab = $request->input('Est_Lab');
					$Theory_Teaching = $request->input('Theory_Teaching');
					$PG_Dist_Guided = $request->input('PG_Dist_Guided');
					$UG_Projects = $request->input('UG_Projects');
					$Book_Pub_Inter = $request->input('Book_Pub_Inter');
					$Book_Pub_Nat = $request->input('Book_Pub_Nat');
					$Outreach_Inst_activity = $request->input('Outreach_Inst_activity');
					$Fellow_IEEE = $request->input('Fellow_IEEE');
					$Plac_Per_Eight = $request->input('Plac_Per_Eight');
					$Plac_per_Seventy = $request->input('Plac_per_Seventy');
					
					$data = array("Ext_Spons_RD_PI"=>$Ext_Spons_RD_PI, 
						"Ext_Spons_RD_COPI"=>$Ext_Spons_RD_COPI,
						"Mem_Spons_RD" =>$Mem_Spons_RD, 
						"Spons_RD_PIORNOT"=>$Spons_RD_PIORNOT,
						 "patent_granted_PI"=>$patent_granted_PI,  
						 "patent_granted_COPI"=>$patent_granted_COPI, 
						 "Mem_patent_granted"=>$Mem_patent_granted,
						 "Patent_PIORNOT"=>$Patent_PIORNOT,
						 "Consult_Proj_PI"=>$Consult_Proj_PI, 
						 "phd_sole_super"=>$phd_sole_super, 
						 "phd_First_super"=>$phd_First_super, 
						 "phd_co_super"=>$phd_co_super, 
						 "Mem_phd_co_super"=>$Mem_phd_co_super,
						 "Jour_main_author"=>$Jour_main_author,  
						 "Jour_co_author"=>$Jour_co_author,
						 "Mem_Jour_co_author"=>$Mem_Jour_co_author,  
						 "Confer__main_author"=>$Confer__main_author,  
						 "conference_co_author"=>$conference_co_author, 
						 "Mem_conference_co_author"=>$Mem_conference_co_author,
						 "Confer_PIORNOT"=>$Confer_PIORNOT,
						 "HOD"=>$HOD, 
						 "DEAN"=>$DEAN,  
						 "Cheif_Warden"=>$Cheif_Warden,  
						 "Prof_TnP"=>$Prof_TnP,
						 "Advisor_estate"=>$Advisor_estate, 
						 "CVO"=>$CVO, 
						 "PI_exam"=>$PI_exam, 
						 "TEQUIP_coordinator"=>$TEQUIP_coordinator, 
						 "Warden"=>$Warden,  
						 "AsstWarden"=>$AsstWarden,  
						 "Associate_Dean"=>$Associate_Dean,  
						 "Chair_academic_comm"=>$Chair_academic_comm, 
						 "Comp_Centre_incharge"=>$Comp_Centre_incharge, 
						 "IT_services_incharge"=>$IT_services_incharge,  
						 "Library_incharge"=>$Library_incharge,  
						 "Admission_incharge"=>$Admission_incharge, 
						 "Stud_Act_incharge"=>$Stud_Act_incharge, 
						 "Other_incharge"=>$Other_incharge, 
						 "Chair_Con_Standing_Comm"=>$Chair_Con_Standing_Comm, 
						 "Dept_Activity_HOD"=>$Dept_Activity_HOD, 
						 "Workshop_Coordinator"=>$Workshop_Coordinator,  
						 "Nat_Prog_Two_Weeks"=>$Nat_Prog_Two_Weeks,  
						 "Nat_Prog_One_Weeks"=>$Nat_Prog_One_Weeks,  
						 "Nat_Conf_Organized"=>$Nat_Conf_Organized,
						"Length_service"=>$Length_service,  
						 "Est_Lab"=>$Est_Lab,  
						 "Theory_Teaching"=>$Theory_Teaching,
						"PG_Dist_Guided"=>$PG_Dist_Guided,  
						 "UG_Projects"=>$UG_Projects,  
						 "Book_Pub_Inter"=>$Book_Pub_Inter,
						 "Book_Pub_Nat"=>$Book_Pub_Nat,  
						 "Outreach_Inst_activity"=>$Outreach_Inst_activity,
						 "Fellow_IEEE"=>$Fellow_IEEE,
						"Plac_Per_Eight"=>$Plac_Per_Eight,  
						 "Plac_per_Seventy"=>$Plac_per_Seventy); 
					
						 DB::table('Creditpoints')->insert($data);
						
						 DB::table('Creditpoints')
			              ->where("credit_id", '=',Auth::id())
			               ->update(['editCredit'=> '1']);	
						
						return redirect('creditTable/creditevaluate');	
		}
			else
			{
						DB::table('Creditpoints')->where('credit_id',Auth::id())->update(array(
		        		
		            'Ext_Spons_RD_PI'   => $request->input('Ext_Spons_RD_PI'),
		            'Ext_Spons_RD_COPI'           => $request->input('Ext_Spons_RD_COPI'),
		            'Mem_Spons_RD' 			   => $request->input('Mem_Spons_RD'),
		            'Spons_RD_PIORNOT'      => $request->input('Spons_RD_PIORNOT'),
		            'patent_granted_PI'     => $request->input('patent_granted_PI'),
		            'patent_granted_COPI'       => $request->input('patent_granted_COPI'),
		            'Mem_patent_granted'         => $request->input('Mem_patent_granted'),
		            'Patent_PIORNOT'   => $request->input('Patent_PIORNOT'),
		            'Consult_Proj_PI'=> $request->input('Consult_Proj_PI'),
		            'phd_sole_super'   => $request->input('phd_sole_super'),
		            'phd_First_super'           => $request->input('phd_First_super'),
		            'phd_co_super' 			   => $request->input('phd_co_super'),
		            'Mem_phd_co_super'      => $request->input('Mem_phd_co_super'),
		            'Jour_main_author'     => $request->input('Jour_main_author'),
		            'Jour_co_author'       => $request->input('Jour_co_author'),
		            'Mem_Jour_co_author'         => $request->input('Mem_Jour_co_author'),
		            'Confer__main_author'   => $request->input('Confer__main_author'),
		            'conference_co_author'=> $request->input('conference_co_author'),
		            'Mem_conference_co_author'   => $request->input('Mem_conference_co_author'),
		            'Confer_PIORNOT'           => $request->input('Confer_PIORNOT'),
		            'HOD' 			   => $request->input('HOD'),
		            'DEAN'      => $request->input('DEAN'),
		            'Cheif_Warden'     => $request->input('Cheif_Warden'),
		            'Prof_TnP'       => $request->input('Prof_TnP'),
		            'Advisor_estate'         => $request->input('Advisor_estate'),
		            'CVO'   => $request->input('CVO'),
		            'PI_exam'=> $request->input('PI_exam'),
		            
		            'TEQUIP_coordinator' 			   => $request->input('TEQUIP_coordinator'),
		            'Warden'      => $request->input('Warden'),
		            'AsstWarden'     => $request->input('AsstWarden'),
		            'Associate_Dean'       => $request->input('Associate_Dean'),
		            'Chair_academic_comm'         => $request->input('Chair_academic_comm'),
		            'Comp_Centre_incharge'   => $request->input('Comp_Centre_incharge'),
		            'IT_services_incharge'=> $request->input('IT_services_incharge'),
		            'Library_incharge' 			   => $request->input('Library_incharge'),
		            'Admission_incharge'      => $request->input('Admission_incharge'),
		            'Stud_Act_incharge'     => $request->input('Stud_Act_incharge'),
		            'Other_incharge'       => $request->input('Other_incharge'),
		            'Chair_Con_Standing_Comm'         => $request->input('Chair_Con_Standing_Comm'),
		            'Dept_Activity_HOD'   => $request->input('Dept_Activity_HOD'),
		            'Workshop_Coordinator'=> $request->input('Workshop_Coordinator'),
		            'Nat_Prog_Two_Weeks' 			   => $request->input('Nat_Prog_Two_Weeks'),
		            'Nat_Prog_One_Weeks'      => $request->input('Nat_Prog_One_Weeks'),
		            'Nat_Conf_Organized'     => $request->input('Nat_Conf_Organized'),
		            'Length_service'       => $request->input('Length_service'),
		            'Est_Lab'         => $request->input('Est_Lab'),
		            'Theory_Teaching'   => $request->input('Theory_Teaching'),
		            'PG_Dist_Guided'=> $request->input('PG_Dist_Guided'),
		            'UG_Projects'       => $request->input('UG_Projects'),
		            'Book_Pub_Inter'         => $request->input('Book_Pub_Inter'),
		            'Book_Pub_Nat'   => $request->input('Book_Pub_Nat'),
		            'Outreach_Inst_activity'=> $request->input('Outreach_Inst_activity'),
		            'Fellow_IEEE'       => $request->input('Fellow_IEEE'),
		            'Plac_Per_Eight'         => $request->input('Plac_Per_Eight'),
		            'Plac_per_Seventy'   => $request->input('Plac_per_Seventy'),
		        		)
		   				 );
					return redirect('creditTable/creditevaluate');
			}

		
	}
    
    public function creditShow()
    {
    	return view('creditTable');
    }

    public function creditEvaluate()
    
 {	
    	$edit = DB::table('Givepoints')->where('give_id','1')->first();
    	
    	if($edit->editSummary == 0)
  	{
    	
    	$credits = DB::table('Creditpoints')->where('credit_id',Auth::id())->first();

    	$givepoints = DB::table('Givepoints')->where('give_id','1')->first();

    	//8 / project  as inventor (In case of more than one person in a Project, the Principal Investigator gets 5 credit points and the rest to the divided equally among other members)
    	
    	if($credits->Ext_Spons_RD_PI >0 )
    	{
    	$credit_Ext_Spons_RD_PI = $credits->Ext_Spons_RD_PI * $givepoints->Ext_Spons_RD_PI_point;
    	}
    	else
    	{
    		$credit_Ext_Spons_RD_PI = 0;
    	}
    	 
    	if($credits->Mem_Spons_RD>1)
    	{
    		if($credits->Spons_RD_PIORNOT =='y' || $credits->Spons_RD_PIORNOT =='Y')
    		{
    			$credit_Ext_Spons_RD_COPI = $credits->Ext_Spons_RD_COPI * $givepoints->Ext_Spons_RD_COPI_point;
    		}
    		else
    		{
    			$credit_Ext_Spons_RD_COPI = $credits->Ext_Spons_RD_COPI * (3/$credits->Mem_Spons_RD);
    		}
    	}
    	else{
    		$credit_Ext_Spons_RD_COPI = 0;
    	}

		//8 / patent as inventor (In case of more than one person in a Project, the Principal Investigator gets 5 credit points and the rest to the divided equally among other members)
		

		if($credits->Ext_Spons_RD_PI>0)
    	{
    	$credit_patent_granted_PI = $credits->patent_granted_PI * $givepoints->patent_granted_PI_point;
    	}
    	else
    	{
    		$credit_patent_granted_PI = 0;
    	}
    	
    	if($credits->Mem_patent_granted>1)
    	{
    		if($credits->Patent_PIORNOT=='y' || $credits->Patent_PIORNOT =='Y')
    		{
    			$credit_patent_granted_COPI = $credits->patent_granted_COPI * $givepoints->patent_granted_COPI_point;
    		}
    		else
    		{
    			$credit_patent_granted_COPI = $credits->patent_granted_COPI * (3/$credits->Mem_patent_granted);
    		}
    	}
    	else{
    		$credit_patent_granted_COPI = 0;
    	}

    	// 2 Credit points @ Rs.5 lakhs of consultancy, subject to maximum of 10 Credit points

    	if($credits->Consult_Proj_PI>0)
    	{
			$var1 = $givepoints->Consult_Proj_PI_point * $credits->Consult_Proj_PI;
			if($var1<=10)
			{
				$credit_Consult_Proj_PI = $var1;
			}
			else
			{
				$credit_Consult_Proj_PI = 10;
			}
		}
		else{
			$credit_Consult_Proj_PI = 0;
		}

		//8 per Ph.D. student. (In case there are more than one supervisor, then the Guide (1st Supervisor) gets 5 credit points per student and the rest to be divided equally among other supervisor(s))

		if($credits->phd_sole_super >0)
		{
			$credit_phd_sole_super = $credits->phd_sole_super * $givepoints->phd_sole_super_point;
		}
		else{
			$credit_phd_sole_super = 0;
		}

		if($credits->phd_First_super >0)
		{
			$credit_phd_First_super = $credits->phd_First_super * $givepoints->phd_First_super_point;
		}
		else{
			$credit_phd_First_super = 0;
		}
		
		if($credits->Mem_phd_co_super >0)
		{
			$credit_phd_co_super = $credits->phd_co_super * ($givepoints->phd_co_super_point/$credits->Mem_phd_co_super);
		}
		else{
			$credit_phd_co_super = 0;
		}

		// One Journal papers in SCI / 4 per paper since the last promotion. First Scopus (Paid Journals not author/Main supervisor will get 2 and rest allowed) will be divided among others.
		
		if($credits->Jour_main_author>0)
		{
			$credit_Jour_main_author = $givepoints->Jour_main_author_point * $credits->Jour_main_author;
		}
		else{
				$credit_Jour_main_author = 0;
		}
		 if($credits->Mem_Jour_co_author>0)
		 {
		 	$credit_Jour_co_author = $credits->Jour_co_author * (2/$credits->Mem_Jour_co_author);
		 }
		 else{
		 		$credit_Jour_co_author = 0;
		 }

		 // 1 credit points/ paper up to a maximum 10 credit points. First author / Main science Conference / any Supervisor will get 0.6 and rest will be internationally renowned divided among the rest.

		 if($credits->Confer__main_author>0)
		 {
		 	$credit_Confer__main_author = $givepoints->Confer__main_author_point * $credits->Confer__main_author;
		 }
		 else{
		 	$credit_Confer__main_author = 0;
		 }
		 if($credits->Mem_conference_co_author>1)
		 {	
		 	if($credits->Confer_PIORNOT=='y' || $credits->Confer_PIORNOT =='Y')
    		{
    			$credit_conference_co_author = $credits->conference_co_author * $givepoints->conference_co_author_point;
    		}
    		else
    		{
    			$credit_conference_co_author = $credits->conference_co_author * (0.4/$credits->Mem_conference_co_author);
    		}
		 }
		 else{
		 	$credit_conference_co_author = 0 ;
		 }

		 // HOD

		 if($credits->HOD >0)
		 {
		 	$var2 = $givepoints->HOD_point * $credits->HOD;
		 }else{
		 	$var2 = 0;
		 }

		 //DEAN


		 if($credits->DEAN >0)
		 {
		 	$var3 = $givepoints->DEAN_point * $credits->DEAN;
		 }else{
		 	$var3 = 0;
		 }

		 //Cheif_Warden

		 if($credits->Cheif_Warden >0)
		 {
		 	$var4= $givepoints->Cheif_Warden_point * $credits->Cheif_Warden;
		 }else{
		 	$var4 = 0;
		 }

		 //Prof_TnP

		  if($credits->Prof_TnP >0)
		 {
		 	$var5= $givepoints->Prof_TnP_point * $credits->Prof_TnP;
		 }else{
		 	$var5 = 0;
		 }

		 //Advisor_estate

		 if($credits->Advisor_estate >0)
		 {
		 	$var6= $givepoints->Advisor_estate_point * $credits->Advisor_estate;
		 }else{
		 	$var6 = 0;
		 }

		 //CVO

		 if($credits->CVO >0)
		 {
		 	$var7= $givepoints->CVO_point * $credits->CVO;
		 }else{
		 	$var7 = 0;
		 }

		 //PI_exam

		 if($credits->PI_exam >0)
		 {
		 	$var8= $givepoints->PI_exam_point * $credits->PI_exam;
		 }else{
		 	$var8 = 0;
		 }

		 //TEQUIP_coordinator

		 if($credits->TEQUIP_coordinator >0)
		 {
		 	$var9= $givepoints->TEQUIP_coordinator_point * $credits->TEQUIP_coordinator;
		 }else{
		 	$var9 = 0;
		 }

		 $final1 = $var2+$var3+$var4+$var5+$var6+$var7+$var8+$var9;
		 if($final1<=16)
		 {
		 	$credit_HOD = $final1/8;
		 	$credit_DEAN = $final1/8;
		 	$credit_CVO = $final1/8;
		 	$credit_Cheif_Warden = $final1/8;
		 	$credit_Prof_TnP = $final1/8;
		 	$credit_Advisor_estate = $final1/8;
		 	$credit_PI_exam = $final1/8;
		 	$credit_TEQUIP_coordinator = $final1/8;
		 }
		 else{
		 	$credit_HOD = 2;
		 	$credit_DEAN = 2;
		 	$credit_CVO = 2;
		 	$credit_Cheif_Warden = 2;
		 	$credit_Prof_TnP = 2;
		 	$credit_Advisor_estate = 2;
		 	$credit_PI_exam = 2;
		 	$credit_TEQUIP_coordinator = 2;
		 }


		 //Warden

		 if($credits->Warden >0)
		 {
		 	$var10 = $givepoints->Warden_point * $credits->Warden;
		 }else{
		 	$var10 = 0;
		 }

		 //Asst Warden


		 if($credits->AsstWarden >0)
		 {
		 	$var11 = $givepoints->AsstWarden_point * $credits->AsstWarden;
		 }else{
		 	$var11 = 0;
		 }

		 //Associate_Dean

		 if($credits->Associate_Dean >0)
		 {
		 	$var12= $givepoints->Associate_Dean_point * $credits->Associate_Dean;
		 }else{
		 	$var12 = 0;
		 }

		 //Chair_academic_comm

		  if($credits->Chair_academic_comm >0)
		 {
		 	$var13 = $givepoints->Chair_academic_comm_point * $credits->Chair_academic_comm;
		 }else{
		 	$var13 = 0;
		 }

		 //Comp_Centre_incharge

		 if($credits->Comp_Centre_incharge >0)
		 {
		 	$var14= $givepoints->Comp_Centre_incharge_point * $credits->Comp_Centre_incharge;
		 }else{
		 	$var14 = 0;
		 }

		 //IT_services_incharge

		 if($credits->IT_services_incharge >0)
		 {
		 	$var15= $givepoints->IT_services_incharge_point * $credits->IT_services_incharge;
		 }else{
		 	$var15 = 0;
		 }

		 //Library_incharge

		 if($credits->Library_incharge >0)
		 {
		 	$var16 = $givepoints->Library_incharge_point * $credits->Library_incharge;
		 }else{
		 	$var16 = 0;
		 }

		 //Admission_incharge

		 if($credits->Admission_incharge >0)
		 {
		 	$var17 = $givepoints->Admission_incharge_point * $credits->Admission_incharge;
		 }else{
		 	$var17 = 0;
		 }
		  // Stud_Act_incharge

		 if($credits->Stud_Act_incharge >0)
		 {
		 	$var18= $givepoints->Stud_Act_incharge_point * $credits->Stud_Act_incharge;
		 }else{
		 	$var18= 0;
		 }

		 //Other_incharge

		 if($credits->Other_incharge >0)
		 {
		 	$var19= $givepoints->Other_incharge_point * $credits->Other_incharge;
		 }else{
		 	$var19 = 0;
		 }

		 $final2 = $var10+$var11+$var11+$var12+$var13+$var14+$var15+$var16+$var17+$var18+$var19;
		 if($final2<=8)
		 {
		 	$credit_Warden = $final2/10;
		 	$credit_AsstWarden = $final2/10;
		 	$credit_Associate_Dean = $final2/10;
		 	$credit_Chair_academic_comm = $final2/10;
		 	$credit_Comp_Centre_incharge = $final2/10;
		 	$credit_IT_services_incharge = $final2/10;
		 	$credit_Library_incharge = $final2/10;
		 	$credit_Admission_incharge = $final2/10;
		 	$credit_Stud_Act_incharge = $final2/10;
		 	$credit_Other_incharge = $final2/10;
		 }
		 else{
		 	$credit_Warden = 0.8;
		 	$credit_AsstWarden = 0.8;
		 	$credit_Associate_Dean = 0.8;
		 	$credit_Chair_academic_comm = 0.8;
		 	$credit_Comp_Centre_incharge = 0.8;
		 	$credit_IT_services_incharge = 0.8;
		 	$credit_Library_incharge = 0.8;
		 	$credit_Admission_incharge = 0.8;
		 	$credit_Stud_Act_incharge = 0.8;
		 	$credit_Other_incharge = 0.8;
		 }

		 //Chairman and Convener

		 if($credits->Chair_Con_Standing_Comm>0)
		 {
		 	$var20 = $credits->Chair_Con_Standing_Comm * $givepoints->Chair_Con_Standing_Comm_point;
		 	if($var20<=3)
		 	{
		 		$credit_Chair_Con_Standing_Comm = $var20;
		 	}
		 	else{
		 		$credit_Chair_Con_Standing_Comm = 3;
		 	}
		 }
		 else{
		 	$credit_Chair_Con_Standing_Comm = 0;
		 }

		 //Activity identified by HOD


 		if($credits->Dept_Activity_HOD>0)
		{
		 	$var21 = $credits->Dept_Activity_HOD * $givepoints->Dept_Activity_HOD_point;
		 	if($var21<=3)
		 	{
		 		$credit_Dept_Activity_HOD = $var21;
		 	}
		 	else{
		 		$credit_Dept_Activity_HOD = 3;
		 	}
		 }
		 else{
		 	$credit_Dept_Activity_HOD = 0;
		 }

		 //workshop

		 if($credits->Workshop_Coordinator>0)
		{
		 	$var22 = $credits->Workshop_Coordinator * $givepoints->Workshop_Coordinator_point;
		 	if($var22<=8)
		 	{
		 		$credit_Workshop_Coordinator = $var22;
		 	}
		 	else{
		 		$credit_Workshop_Coordinator = 8;
		 	}
		 }
		 else{
		 	$credit_Workshop_Coordinator = 0;
		 }

		 //GIAN 2 weeks program

		 if($credits->Nat_Prog_Two_Weeks>0)
		{
		 	$var23 = $credits->Nat_Prog_Two_Weeks * $givepoints->Nat_Prog_Two_Weeks_point;
		 	if($var23<=4)
		 	{
		 		$credit_Nat_Prog_Two_Weeks = $var23;
		 	}
		 	else{
		 		$credit_Nat_Prog_Two_Weeks = 4;
		 	}
		 }
		 else{
		 	$credit_Nat_Prog_Two_Weeks = 0;
		 }

		 //GIAN 1 weeks program

		 if($credits->Nat_Prog_One_Weeks>0)
		{
		 	$var24 = $credits->Nat_Prog_One_Weeks * $givepoints->Nat_Prog_One_Weeks_point;
		 	if($var24<=2)
		 	{
		 		$credit_Nat_Prog_One_Weeks = $var24;
		 	}
		 	else{
		 		$credit_Nat_Prog_One_Weeks = 2;
		 	}
		 }
		 else{
		 	$credit_Nat_Prog_One_Weeks = 0;
		 }

		 // International 3 per program up a max of 6 credits points since the last promotion.

		 if($credits->Nat_Conf_Organized>0)
		{
		 	$var25 = $credits->Nat_Conf_Organized * $givepoints->Nat_Conf_Organized_point;
		 	if($var25<=6)
		 	{
		 		$credit_Nat_Conf_Organized = $var25;
		 	}
		 	else{
		 		$credit_Nat_Conf_Organized = 6;
		 	}
		 }
		 else{
		 	$credit_Nat_Conf_Organized = 0;
		 }

		 //length of service

		if($credits->Length_service>0)
		{
		 	$var26 = $credits->Length_service * $givepoints->Length_service_point;
		 	if($var26<=10)
		 	{
		 		$credit_Length_service = $var26;
		 	}
		 	else{
		 		$credit_Length_service = 10;
		 	}
		 }
		 else{
		 	$credit_Length_service = 0;
		 }

		 //Est New Labs

		 if($credits->Est_Lab>0)
		{
		 	$var27 = $credits->Est_Lab * $givepoints->Est_Lab_point;
		 	if($var27<=4)
		 	{
		 		$credit_Est_Lab = $var27;
		 	}
		 	else{
		 		$credit_Est_Lab = 4;
		 	}
		 }
		 else{
		 	$credit_Est_Lab = 0;
		 }

		 //Theory Teaching

		 if($credits->Theory_Teaching>0)
		{
		 	$var28 = $credits->Theory_Teaching * $givepoints->Theory_Teaching_point;
		 	if($var28<=6)
		 	{
		 		$credit_Theory_Teaching = $var28;
		 	}
		 	else{
		 		$credit_Theory_Teaching = 6;
		 	}
		 }
		 else{
		 	$credit_Theory_Teaching = 0;
		 }

		 //PG dissertation
		 if($credits->PG_Dist_Guided>0)
		{
		 	$var29 = $credits->PG_Dist_Guided * $givepoints->PG_Dist_Guided_point;
		 	if($var29<=10)
		 	{
		 		$credit_PG_Dist_Guided = $var29;
		 	}
		 	else{
		 		$credit_PG_Dist_Guided = 10;
		 	}
		 }
		 else{
		 	$credit_PG_Dist_Guided = 0;
		 }

		  //UG Project
		 if($credits->UG_Projects>0)
		{
		 	$var29 = $credits->UG_Projects * $givepoints->UG_Projects_point;
		 	if($var29<=4)
		 	{
		 		$credit_UG_Projects = $var29;
		 	}
		 	else{
		 		$credit_UG_Projects = 4;
		 	}
		 }
		 else{
		 	$credit_UG_Projects = 0;
		 }

		 //Text Book International
		 if($credits->Book_Pub_Inter>0)
		{
		 	$var30 = $credits->Book_Pub_Inter * $givepoints->Book_Pub_Inter_point;
		 	if($var30<=18)
		 	{
		 		$credit_Book_Pub_Inter = $var30;
		 	}
		 	else{
		 		$credit_Book_Pub_Inter = 18;
		 	}
		 }
		 else{
		 	$credit_Book_Pub_Inter = 0;
		 }

		 //Text Book National
		 if($credits->Book_Pub_Nat>0)
		{
		 	$var31 = $credits->Book_Pub_Nat * $givepoints->Book_Pub_Nat_point;
		 	if($var31<=6)
		 	{
		 		$credit_Book_Pub_Nat = $var31;
		 	}
		 	else{
		 		$credit_Book_Pub_Nat = 6;
		 	}
		 }
		 else{
		 	$credit_Book_Pub_Nat = 0;
		 }

		 //Outreach
		 if($credits->Outreach_Inst_activity>0)
		{
		 	$var32 = $credits->Outreach_Inst_activity * $givepoints->Outreach_Inst_activity_point;
		 	if($var32<=4)
		 	{
		 		$credit_Outreach_Inst_activity = $var32;
		 	}
		 	else{
		 		$credit_Outreach_Inst_activity = 4;
		 	}
		 }
		 else{
		 	$credit_Outreach_Inst_activity = 0;
		 }

		  //Fellow IEEE
		 if($credits->Fellow_IEEE>0)
		{
		 	$credit_Fellow_IEEE = $givepoints->Fellow_IEEE_point;
		 
		 }
		 else{
		 	$credit_Fellow_IEEE = 0;
		 }

		 //Placement 80+
		 if($credits->Plac_Per_Eight>0)
		{
		 	$var33 = $credits->Plac_Per_Eight * $givepoints->Plac_Per_Eight_point;
		 	if($var33<=20)
		 	{
		 		$credit_Plac_Per_Eight = $var33;
		 	}
		 	else
		 	{
		 		$credit_Plac_Per_Eight = 20;
		 	}
		 }
		 else{
		 	$credit_Plac_Per_Eight = 0;
		 }

		  //Placement 70+
		 if($credits->Plac_per_Seventy>0)
		{
		 	$var34 = $credits->Plac_per_Seventy * $givepoints->Plac_per_Seventy_point;
		 	if($var34<=10)
		 	{
		 		$credit_Plac_per_Seventy = $var34;
		 	}
		 	else
		 	{
		 		$credit_Plac_per_Seventy = 10;
		 	}
		 }
		 else{
		 	$credit_Plac_per_Seventy =0 ;
		 }
	 	 $total_Credit_Points = $credit_Ext_Spons_RD_PI + $credit_Ext_Spons_RD_COPI+$credit_patent_granted_PI+$credit_patent_granted_COPI+$credit_Consult_Proj_PI+$credit_phd_sole_super + $credit_phd_First_super + $credit_phd_co_super +$credit_Jour_main_author +$credit_Jour_co_author + $credit_Confer__main_author + $credit_conference_co_author +$credit_HOD + $credit_DEAN +$credit_Cheif_Warden + $credit_Prof_TnP +$credit_Advisor_estate +$credit_CVO +$credit_PI_exam +$credit_TEQUIP_coordinator +$credit_Warden +$credit_AsstWarden +$credit_Associate_Dean +$credit_Chair_academic_comm +$credit_Comp_Centre_incharge +$credit_IT_services_incharge + $credit_Library_incharge + $credit_Admission_incharge +$credit_Stud_Act_incharge +$credit_Other_incharge +$credit_Chair_Con_Standing_Comm +$credit_Dept_Activity_HOD +$credit_Workshop_Coordinator +$credit_Nat_Prog_Two_Weeks +$credit_Nat_Prog_One_Weeks +$credit_Nat_Conf_Organized +$credit_Length_service +$credit_Est_Lab+$credit_Theory_Teaching +$credit_PG_Dist_Guided +$credit_UG_Projects +$credit_Book_Pub_Inter +$credit_Book_Pub_Nat +$credit_Outreach_Inst_activity +$credit_Fellow_IEEE +$credit_Plac_Per_Eight +$credit_Plac_per_Seventy;

		 $data = array("credit_Ext_Spons_RD_PI"=>$credit_Ext_Spons_RD_PI, 
			"credit_Ext_Spons_RD_COPI"=>$credit_Ext_Spons_RD_COPI, 
			 "credit_patent_granted_PI"=>$credit_patent_granted_PI,  
			 "credit_patent_granted_COPI"=>$credit_patent_granted_COPI, 
			 "credit_Consult_Proj_PI"=>$credit_Consult_Proj_PI, 
			 "credit_phd_sole_super"=>$credit_phd_sole_super, 
			 "credit_phd_First_super"=>$credit_phd_First_super, 
			 "credit_phd_co_super"=>$credit_phd_co_super, 
			 "credit_Jour_main_author"=>$credit_Jour_main_author,  
			 "credit_Jour_co_author"=>$credit_Jour_co_author,  
			 "credit_Confer__main_author"=>$credit_Confer__main_author,  
			 "credit_conference_co_author"=>$credit_conference_co_author, 
			 "credit_HOD"=>$credit_HOD, 
			 "credit_DEAN"=>$credit_DEAN,  
			 "credit_Cheif_Warden"=>$credit_Cheif_Warden,  
			 "credit_Prof_TnP"=>$credit_Prof_TnP,
			 "credit_Advisor_estate"=>$credit_Advisor_estate, 
			 "credit_CVO"=>$credit_CVO, 
			 "credit_PI_exam"=>$credit_PI_exam, 
			 "credit_TEQUIP_coordinator"=>$credit_TEQUIP_coordinator, 
			 "credit_Warden"=>$credit_Warden,  
			 "credit_AsstWarden"=>$credit_AsstWarden,  
			 "credit_Associate_Dean"=>$credit_Associate_Dean,  
			 "credit_Chair_academic_comm"=>$credit_Chair_academic_comm, 
			 "credit_Comp_Centre_incharge"=>$credit_Comp_Centre_incharge, 
			 "credit_IT_services_incharge"=>$credit_IT_services_incharge,  
			 "credit_Library_incharge"=>$credit_Library_incharge,  
			 "credit_Admission_incharge"=>$credit_Admission_incharge, 
			 "credit_Stud_Act_incharge"=>$credit_Stud_Act_incharge, 
			 "credit_Other_incharge"=>$credit_Other_incharge, 
			 "credit_Chair_Con_Standing_Comm"=>$credit_Chair_Con_Standing_Comm, 
			 "credit_Dept_Activity_HOD"=>$credit_Dept_Activity_HOD, 
			 "credit_Workshop_Coordinator"=>$credit_Workshop_Coordinator,  
			 "credit_Nat_Prog_Two_Weeks"=>$credit_Nat_Prog_Two_Weeks,  
			 "credit_Nat_Prog_One_Weeks"=>$credit_Nat_Prog_One_Weeks,  
			 "credit_Nat_Conf_Organized"=>$credit_Nat_Conf_Organized,
			"credit_Length_service"=>$credit_Length_service,  
			 "credit_Est_Lab"=>$credit_Est_Lab,  
			 "credit_Theory_Teaching"=>$credit_Theory_Teaching,
			"credit_PG_Dist_Guided"=>$credit_PG_Dist_Guided,  
			 "credit_UG_Projects"=>$credit_UG_Projects,  
			 "credit_Book_Pub_Inter"=>$credit_Book_Pub_Inter,
			 "credit_Book_Pub_Nat"=>$credit_Book_Pub_Nat,  
			 "credit_Outreach_Inst_activity"=>$credit_Outreach_Inst_activity,
			 "credit_Fellow_IEEE"=>$credit_Fellow_IEEE,
			"credit_Plac_Per_Eight"=>$credit_Plac_Per_Eight,  
			 "credit_Plac_per_Seventy"=>$credit_Plac_per_Seventy,
				"total_Credit_Points" =>$total_Credit_Points); 
		
		DB::table('Creditpointssummarys')->insert($data);
		
		DB::table('Creditpointssummarys')
               ->where("creditsum_id", '=', Auth::id())
               ->update(['editSummary'=> '1']);
		
		return redirect('creditevaluate/success');
		// return Redirect::action('App\Http\Controllers\pdfController@showSuccess');

	}
	
		else
	{	
		$credits = DB::table('Creditpoints')->where('credit_id',Auth::id())->first();

    	$givepoints = DB::table('Givepoints')->where('give_id','1')->first();

    	//8 / project  as inventor (In case of more than one person in a Project, the Principal Investigator gets 5 credit points and the rest to the divided equally among other members)
    	
    	if($credits->Ext_Spons_RD_PI >0 )
    	{
    	$credit_Ext_Spons_RD_PI = $credits->Ext_Spons_RD_PI * $givepoints->Ext_Spons_RD_PI_point;
    	}
    	else
    	{
    		$credit_Ext_Spons_RD_PI = 0;
    	}
    	 
    	if($credits->Mem_Spons_RD>1)
    	{
    		if($credits->Spons_RD_PIORNOT =='y' || $credits->Spons_RD_PIORNOT =='Y')
    		{
    			$credit_Ext_Spons_RD_COPI = $credits->Ext_Spons_RD_COPI * $givepoints->Ext_Spons_RD_COPI_point;
    		}
    		else
    		{
    			$credit_Ext_Spons_RD_COPI = $credits->Ext_Spons_RD_COPI * (3/$credits->Mem_Spons_RD);
    		}
    	}
    	else{
    		$credit_Ext_Spons_RD_COPI = 0 ;
    	}

		//8 / patent as inventor (In case of more than one person in a Project, the Principal Investigator gets 5 credit points and the rest to the divided equally among other members)
		

		if($credits->Ext_Spons_RD_PI>0)
    	{
    	$credit_patent_granted_PI = $credits->patent_granted_PI * $givepoints->patent_granted_PI_point;
    	}
    	else
    	{
    		$credit_patent_granted_PI = 0;
    	}
    	
    	if($credits->Mem_patent_granted>1)
    	{
    		if($credits->Patent_PIORNOT=='y' || $credits->Patent_PIORNOT =='Y')
    		{
    			$credit_patent_granted_COPI = $credits->patent_granted_COPI * $givepoints->patent_granted_COPI_point;
    		}
    		else
    		{
    			$credit_patent_granted_COPI = $credits->patent_granted_COPI * (3/$credits->Mem_patent_granted);
    		}
    	}
    	else{
    		$credit_patent_granted_COPI = 0;
    	}

    	// 2 Credit points @ Rs.5 lakhs of consultancy, subject to maximum of 10 Credit points

    	if($credits->Consult_Proj_PI>0)
    	{
			$var1 = $givepoints->Consult_Proj_PI_point * $credits->Consult_Proj_PI;
			if($var1<=10)
			{
				$credit_Consult_Proj_PI = $var1;
			}
			else
			{
				$credit_Consult_Proj_PI = 10;
			}
		}
		else{
			$credit_Consult_Proj_PI = 0;
		}

		//8 per Ph.D. student. (In case there are more than one supervisor, then the Guide (1st Supervisor) gets 5 credit points per student and the rest to be divided equally among other supervisor(s))

		if($credits->phd_sole_super >0)
		{
			$credit_phd_sole_super = $credits->phd_sole_super * $givepoints->phd_sole_super_point;
		}
		else{
			$credit_phd_sole_super = 0;
		}

		if($credits->phd_First_super >0)
		{
			$credit_phd_First_super = $credits->phd_First_super * $givepoints->phd_First_super_point;
		}
		else{
			$credit_phd_First_super =0 ;
		}
		
		if($credits->Mem_phd_co_super >0)
		{
			$credit_phd_co_super = $credits->phd_co_super * ($givepoints->phd_co_super_point/$credits->Mem_phd_co_super);
		}
		else{
			$credit_phd_co_super = 0;
		}

		// One Journal papers in SCI / 4 per paper since the last promotion. First Scopus (Paid Journals not author/Main supervisor will get 2 and rest allowed) will be divided among others.
		
		if($credits->Jour_main_author>0)
		{
			$credit_Jour_main_author = $givepoints->Jour_main_author_point * $credits->Jour_main_author;
		}
		else{
				$credit_Jour_main_author = 0;
		}
		 if($credits->Mem_Jour_co_author>0)
		 {
		 	$credit_Jour_co_author = $credits->Jour_co_author * (2/$credits->Mem_Jour_co_author);
		 }
		 else{
		 		$credit_Jour_co_author = 0;
		 }

		 // 1 credit points/ paper up to a maximum 10 credit points. First author / Main science Conference / any Supervisor will get 0.6 and rest will be internationally renowned divided among the rest.

		 if($credits->Confer__main_author>0)
		 {
		 	$credit_Confer__main_author = $givepoints->Confer__main_author_point * $credits->Confer__main_author;
		 }
		 else{
		 	$credit_Confer__main_author = 0;
		 }
		 if($credits->Mem_conference_co_author>1)
		 {	
		 	if($credits->Confer_PIORNOT=='y' || $credits->Confer_PIORNOT =='Y')
    		{
    			$credit_conference_co_author = $credits->conference_co_author * $givepoints->conference_co_author_point;
    		}
    		else
    		{
    			$credit_conference_co_author = $credits->conference_co_author * (0.4/$credits->Mem_conference_co_author);
    		}
		 }
		 else{
		 	$credit_conference_co_author = 0;
		 }

		 // HOD

		 if($credits->HOD >0)
		 {
		 	$var2 = $givepoints->HOD_point * $credits->HOD;
		 }else{
		 	$var2 = 0;
		 }

		 //DEAN


		 if($credits->DEAN >0)
		 {
		 	$var3 = $givepoints->DEAN_point * $credits->DEAN;
		 }else{
		 	$var3 = 0;
		 }

		 //Cheif_Warden

		 if($credits->Cheif_Warden >0)
		 {
		 	$var4= $givepoints->Cheif_Warden_point * $credits->Cheif_Warden;
		 }else{
		 	$var4 = 0;
		 }

		 //Prof_TnP

		  if($credits->Prof_TnP >0)
		 {
		 	$var5= $givepoints->Prof_TnP_point * $credits->Prof_TnP;
		 }else{
		 	$var5 = 0;
		 }

		 //Advisor_estate

		 if($credits->Advisor_estate >0)
		 {
		 	$var6= $givepoints->Advisor_estate_point * $credits->Advisor_estate;
		 }else{
		 	$var6 = 0;
		 }

		 //CVO

		 if($credits->CVO >0)
		 {
		 	$var7= $givepoints->CVO_point * $credits->CVO;
		 }else{
		 	$var7 = 0;
		 }

		 //PI_exam

		 if($credits->PI_exam >0)
		 {
		 	$var8= $givepoints->PI_exam_point * $credits->PI_exam;
		 }else{
		 	$var8 = 0;
		 }

		 //TEQUIP_coordinator

		 if($credits->TEQUIP_coordinator >0)
		 {
		 	$var9= $givepoints->TEQUIP_coordinator_point * $credits->TEQUIP_coordinator;
		 }else{
		 	$var9 = 0;
		 }

		 $final1 = $var2+$var3+$var4+$var5+$var6+$var7+$var8+$var9;
		 if($final1<=16)
		 {
		 	$credit_HOD = $final1/8;
		 	$credit_DEAN = $final1/8;
		 	$credit_CVO = $final1/8;
		 	$credit_Cheif_Warden = $final1/8;
		 	$credit_Prof_TnP = $final1/8;
		 	$credit_Advisor_estate = $final1/8;
		 	$credit_PI_exam = $final1/8;
		 	$credit_TEQUIP_coordinator = $final1/8;
		 }
		 else{
		 	$credit_HOD = 2;
		 	$credit_DEAN = 2;
		 	$credit_CVO = 2;
		 	$credit_Cheif_Warden = 2;
		 	$credit_Prof_TnP = 2;
		 	$credit_Advisor_estate = 2;
		 	$credit_PI_exam = 2;
		 	$credit_TEQUIP_coordinator = 2;
		 }


		 //Warden

		 if($credits->Warden >0)
		 {
		 	$var10 = $givepoints->Warden_point * $credits->Warden;
		 }else{
		 	$var10 = 0;
		 }

		 //Asst Warden


		 if($credits->AsstWarden >0)
		 {
		 	$var11 = $givepoints->AsstWarden_point * $credits->AsstWarden;
		 }else{
		 	$var11 = 0;
		 }

		 //Associate_Dean

		 if($credits->Associate_Dean >0)
		 {
		 	$var12= $givepoints->Associate_Dean_point * $credits->Associate_Dean;
		 }else{
		 	$var12 = 0;
		 }

		 //Chair_academic_comm

		  if($credits->Chair_academic_comm >0)
		 {
		 	$var13 = $givepoints->Chair_academic_comm_point * $credits->Chair_academic_comm;
		 }else{
		 	$var13 = 0;
		 }

		 //Comp_Centre_incharge

		 if($credits->Comp_Centre_incharge >0)
		 {
		 	$var14= $givepoints->Comp_Centre_incharge_point * $credits->Comp_Centre_incharge;
		 }else{
		 	$var14 = 0;
		 }

		 //IT_services_incharge

		 if($credits->IT_services_incharge >0)
		 {
		 	$var15= $givepoints->IT_services_incharge_point * $credits->IT_services_incharge;
		 }else{
		 	$var15 = 0;
		 }

		 //Library_incharge

		 if($credits->Library_incharge >0)
		 {
		 	$var16 = $givepoints->Library_incharge_point * $credits->Library_incharge;
		 }else{
		 	$var16 = 0;
		 }

		 //Admission_incharge

		 if($credits->Admission_incharge >0)
		 {
		 	$var17 = $givepoints->Admission_incharge_point * $credits->Admission_incharge;
		 }else{
		 	$var17 = 0;
		 }
		  // Stud_Act_incharge

		 if($credits->Stud_Act_incharge >0)
		 {
		 	$var18= $givepoints->Stud_Act_incharge_point * $credits->Stud_Act_incharge;
		 }else{
		 	$var18= 0;
		 }

		 //Other_incharge

		 if($credits->Other_incharge >0)
		 {
		 	$var19= $givepoints->Other_incharge_point * $credits->Other_incharge;
		 }else{
		 	$var19 = 0;
		 }

		 $final2 = $var10+$var11+$var11+$var12+$var13+$var14+$var15+$var16+$var17+$var18+$var19;
		 if($final2<=8)
		 {
		 	$credit_Warden = $final2/10;
		 	$credit_AsstWarden = $final2/10;
		 	$credit_Associate_Dean = $final2/10;
		 	$credit_Chair_academic_comm = $final2/10;
		 	$credit_Comp_Centre_incharge = $final2/10;
		 	$credit_IT_services_incharge = $final2/10;
		 	$credit_Library_incharge = $final2/10;
		 	$credit_Admission_incharge = $final2/10;
		 	$credit_Stud_Act_incharge = $final2/10;
		 	$credit_Other_incharge = $final2/10;
		 }
		 else{
		 	$credit_Warden = 0.8;
		 	$credit_AsstWarden = 0.8;
		 	$credit_Associate_Dean = 0.8;
		 	$credit_Chair_academic_comm = 0.8;
		 	$credit_Comp_Centre_incharge = 0.8;
		 	$credit_IT_services_incharge = 0.8;
		 	$credit_Library_incharge = 0.8;
		 	$credit_Admission_incharge = 0.8;
		 	$credit_Stud_Act_incharge = 0.8;
		 	$credit_Other_incharge = 0.8;
		 }

		 //Chairman and Convener

		 if($credits->Chair_Con_Standing_Comm>0)
		 {
		 	$var20 = $credits->Chair_Con_Standing_Comm * $givepoints->Chair_Con_Standing_Comm_point;
		 	if($var20<=3)
		 	{
		 		$credit_Chair_Con_Standing_Comm = $var20;
		 	}
		 	else{
		 		$credit_Chair_Con_Standing_Comm = 3;
		 	}
		 }
		 else{
		 	$credit_Chair_Con_Standing_Comm = 0;
		 }

		 //Activity identified by HOD


 		if($credits->Dept_Activity_HOD>0)
		{
		 	$var21 = $credits->Dept_Activity_HOD * $givepoints->Dept_Activity_HOD_point;
		 	if($var21<=3)
		 	{
		 		$credit_Dept_Activity_HOD = $var21;
		 	}
		 	else{
		 		$credit_Dept_Activity_HOD = 3;
		 	}
		 }
		 else{
		 	$credit_Dept_Activity_HOD = 0;
		 }

		 //workshop

		 if($credits->Workshop_Coordinator>0)
		{
		 	$var22 = $credits->Workshop_Coordinator * $givepoints->Workshop_Coordinator_point;
		 	if($var22<=8)
		 	{
		 		$credit_Workshop_Coordinator = $var22;
		 	}
		 	else{
		 		$credit_Workshop_Coordinator = 8;
		 	}
		 }
		 else{
		 	$credit_Workshop_Coordinator = 0;
		 }

		 //GIAN 2 weeks program

		 if($credits->Nat_Prog_Two_Weeks>0)
		{
		 	$var23 = $credits->Nat_Prog_Two_Weeks * $givepoints->Nat_Prog_Two_Weeks_point;
		 	if($var23<=4)
		 	{
		 		$credit_Nat_Prog_Two_Weeks = $var23;
		 	}
		 	else{
		 		$credit_Nat_Prog_Two_Weeks = 4;
		 	}
		 }
		 else{
		 	$credit_Nat_Prog_Two_Weeks = 0;
		 }

		 //GIAN 1 weeks program

		 if($credits->Nat_Prog_One_Weeks>0)
		{
		 	$var24 = $credits->Nat_Prog_One_Weeks * $givepoints->Nat_Prog_One_Weeks_point;
		 	if($var24<=2)
		 	{
		 		$credit_Nat_Prog_One_Weeks = $var24;
		 	}
		 	else{
		 		$credit_Nat_Prog_One_Weeks = 2;
		 	}
		 }
		 else{
		 	$credit_Nat_Prog_One_Weeks = 0;
		 }

		 // International 3 per program up a max of 6 credits points since the last promotion.

		 if($credits->Nat_Conf_Organized>0)
		{
		 	$var25 = $credits->Nat_Conf_Organized * $givepoints->Nat_Conf_Organized_point;
		 	if($var25<=6)
		 	{
		 		$credit_Nat_Conf_Organized = $var25;
		 	}
		 	else{
		 		$credit_Nat_Conf_Organized = 6;
		 	}
		 }
		 else{
		 	$credit_Nat_Conf_Organized = 0;
		 }

		 //length of service

		if($credits->Length_service>0)
		{
		 	$var26 = $credits->Length_service * $givepoints->Length_service_point;
		 	if($var26<=10)
		 	{
		 		$credit_Length_service = $var26;
		 	}
		 	else{
		 		$credit_Length_service = 10;
		 	}
		 }
		 else{
		 	$credit_Length_service = 0;
		 }

		 //Est New Labs

		 if($credits->Est_Lab>0)
		{
		 	$var27 = $credits->Est_Lab * $givepoints->Est_Lab_point;
		 	if($var27<=4)
		 	{
		 		$credit_Est_Lab = $var27;
		 	}
		 	else{
		 		$credit_Est_Lab = 4;
		 	}
		 }
		 else{
		 	$credit_Est_Lab = 0;
		 }

		 //Theory Teaching

		 if($credits->Theory_Teaching>0)
		{
		 	$var28 = $credits->Theory_Teaching * $givepoints->Theory_Teaching_point;
		 	if($var28<=6)
		 	{
		 		$credit_Theory_Teaching = $var28;
		 	}
		 	else{
		 		$credit_Theory_Teaching = 6;
		 	}
		 }
		 else{
		 	$credit_Theory_Teaching = 0;
		 }

		 //PG dissertation
		 if($credits->PG_Dist_Guided>0)
		{
		 	$var29 = $credits->PG_Dist_Guided * $givepoints->PG_Dist_Guided_point;
		 	if($var29<=10)
		 	{
		 		$credit_PG_Dist_Guided = $var29;
		 	}
		 	else{
		 		$credit_PG_Dist_Guided = 10;
		 	}
		 }
		 else{
		 	$credit_PG_Dist_Guided = 0 ;
		 }

		  //UG Project
		 if($credits->UG_Projects>0)
		{
		 	$var29 = $credits->UG_Projects * $givepoints->UG_Projects_point;
		 	if($var29<=4)
		 	{
		 		$credit_UG_Projects = $var29;
		 	}
		 	else{
		 		$credit_UG_Projects = 4;
		 	}
		 }
		 else{
		 	$credit_UG_Projects = 0;
		 }

		 //Text Book International
		 if($credits->Book_Pub_Inter>0)
		{
		 	$var30 = $credits->Book_Pub_Inter * $givepoints->Book_Pub_Inter_point;
		 	if($var30<=18)
		 	{
		 		$credit_Book_Pub_Inter = $var30;
		 	}
		 	else{
		 		$credit_Book_Pub_Inter = 18;
		 	}
		 }
		 else{
		 	$credit_Book_Pub_Inter = 0 ;
		 }

		 //Text Book National
		 if($credits->Book_Pub_Nat>0)
		{
		 	$var31 = $credits->Book_Pub_Nat * $givepoints->Book_Pub_Nat_point;
		 	if($var31<=6)
		 	{
		 		$credit_Book_Pub_Nat = $var31;
		 	}
		 	else{
		 		$credit_Book_Pub_Nat = 6;
		 	}
		 }
		 else{
		 	$credit_Book_Pub_Nat = 0;
		 }

		 //Outreach
		 if($credits->Outreach_Inst_activity>0)
		{
		 	$var32 = $credits->Outreach_Inst_activity * $givepoints->Outreach_Inst_activity_point;
		 	if($var32<=4)
		 	{
		 		$credit_Outreach_Inst_activity = $var32;
		 	}
		 	else{
		 		$credit_Outreach_Inst_activity = 4;
		 	}
		 }
		 else{
		 	$credit_Outreach_Inst_activity = 0;
		 }

		  //Fellow IEEE
		 if($credits->Fellow_IEEE>0)
		{
		 	$credit_Fellow_IEEE = $givepoints->Fellow_IEEE_point;
		 
		 }
		 else{
		 	$credit_Fellow_IEEE = 0;
		 }

		 //Placement 80+
		 if($credits->Plac_Per_Eight>0)
		{
		 	$var33 = $credits->Plac_Per_Eight * $givepoints->Plac_Per_Eight_point;
		 	if($var33<=20)
		 	{
		 		$credit_Plac_Per_Eight = $var33;
		 	}
		 	else
		 	{
		 		$credit_Plac_Per_Eight = 20;
		 	}
		 }
		 else{
		 	$credit_Plac_Per_Eight = 0;
		 }

		  //Placement 70+
		 if($credits->Plac_per_Seventy>0)
		{
		 	$var34 = $credits->Plac_per_Seventy * $givepoints->Plac_per_Seventy_point;
		 	if($var34<=10)
		 	{
		 		$credit_Plac_per_Seventy = $var34;
		 	}
		 	else
		 	{
		 		$credit_Plac_per_Seventy = 10;
		 	}
		 }
		 else{
		 	$credit_Plac_per_Seventy = 0;
		 }
	 	 $total_Credit_Points = $credit_Ext_Spons_RD_PI + $credit_Ext_Spons_RD_COPI+$credit_patent_granted_PI+$credit_patent_granted_COPI+$credit_Consult_Proj_PI+$credit_phd_sole_super + $credit_phd_First_super + $credit_phd_co_super +$credit_Jour_main_author +$credit_Jour_co_author + $credit_Confer__main_author + $credit_conference_co_author +$credit_HOD + $credit_DEAN +$credit_Cheif_Warden + $credit_Prof_TnP +$credit_Advisor_estate +$credit_CVO +$credit_PI_exam +$credit_TEQUIP_coordinator +$credit_Warden +$credit_AsstWarden +$credit_Associate_Dean +$credit_Chair_academic_comm +$credit_Comp_Centre_incharge +$credit_IT_services_incharge + $credit_Library_incharge + $credit_Admission_incharge +$credit_Stud_Act_incharge +$credit_Other_incharge +$credit_Chair_Con_Standing_Comm +$credit_Dept_Activity_HOD +$credit_Workshop_Coordinator +$credit_Nat_Prog_Two_Weeks +$credit_Nat_Prog_One_Weeks +$credit_Nat_Conf_Organized +$credit_Length_service +$credit_Est_Lab+$credit_Theory_Teaching +$credit_PG_Dist_Guided +$credit_UG_Projects +$credit_Book_Pub_Inter +$credit_Book_Pub_Nat +$credit_Outreach_Inst_activity +$credit_Fellow_IEEE +$credit_Plac_Per_Eight +$credit_Plac_per_Seventy;


	DB::table('Creditpoints')->where('credit_id',Auth::id())->update(array(
        
            
     			'credit_Ext_Spons_RD_PI' => $credit_Ext_Spons_RD_PI,
     			'credit_Ext_Spons_RD_COPI' => $credit_Ext_Spons_RD_COPI,
     			'credit_patent_granted_PI'=>$credit_patent_granted_PI,
     			'credit_patent_granted_COPI'=>$credit_patent_granted_COPI,
     			'credit_Consult_Proj_PI'=>$credit_Consult_Proj_PI,
     			'credit_phd_sole_super'=>$credit_phd_sole_super,
     			'credit_phd_First_super'=>$credit_phd_First_super,
     			'credit_phd_co_super'=>$credit_phd_co_super,
     			'credit_Jour_main_author'=>$credit_Jour_main_author,
     			'credit_Jour_co_author'=>$credit_Jour_co_author,
     			'credit_Confer__main_author'=>$credit_Confer__main_author,
     			'credit_conference_co_author'=>$credit_conference_co_author,
     			'credit_HOD'=>$credit_HOD,
     			'credit_DEAN'=>$credit_DEAN,
     			'credit_Cheif_Warden'=>$credit_Cheif_Warden,
     			'credit_Prof_TnP'=>$credit_Prof_TnP,
     			'credit_Advisor_estate'=>$credit_Advisor_estate,
     			'credit_CVO'=>$credit_CVO,
     			'credit_PI_exam'=>$credit_PI_exam,
     			'credit_TEQUIP_coordinator'=>$credit_TEQUIP_coordinator,
     			'credit_Warden'=>$credit_Warden,
     			'credit_AsstWarden'=>$credit_AsstWarden,
     			'credit_Associate_Dean'=>$credit_Associate_Dean,
     			'credit_Chair_academic_comm'=>$credit_Chair_academic_comm,
     			'credit_Comp_Centre_incharge'=>$credit_Comp_Centre_incharge,
     			'credit_IT_services_incharge'=>$credit_IT_services_incharge,
     			'credit_Library_incharge'=>$credit_Library_incharge,
     			'credit_Admission_incharge'=>$credit_Admission_incharge,
     			'credit_Stud_Act_incharge'=>$credit_Stud_Act_incharge,
     			'credit_Other_incharge'=>$credit_Other_incharge,
     			'credit_Chair_Con_Standing_Comm'=>$credit_Chair_Con_Standing_Comm,
     			'credit_Dept_Activity_HOD'=>$credit_Dept_Activity_HOD,
     			'credit_Workshop_Coordinator'=>$credit_Workshop_Coordinator,
     			'credit_Nat_Prog_Two_Weeks'=>$credit_Nat_Prog_Two_Weeks,
     			'credit_Nat_Prog_One_Weeks'=>$credit_Nat_Prog_One_Weeks,
     			'credit_Nat_Conf_Organized'=>$credit_Nat_Conf_Organized,
     			'credit_Length_service'=>$credit_Length_service,
     			'credit_Est_Lab'=>$credit_Est_Lab,
     			'credit_Theory_Teaching'=>$credit_Theory_Teaching,
     			'credit_PG_Dist_Guided'=>$credit_PG_Dist_Guided,
     			'credit_UG_Projects'=>$credit_UG_Projects,
     			'credit_Book_Pub_Inter'=>$credit_Book_Pub_Inter,
     			'credit_Book_Pub_Nat'=>$credit_Book_Pub_Nat,
     			'credit_Outreach_Inst_activity'=>$credit_Outreach_Inst_activity,
     			'credit_Fellow_IEEE'=>$credit_Fellow_IEEE,
     			'credit_Plac_Per_Eight'=>$credit_Plac_Per_Eight,
     			'credit_Plac_per_Seventy'=>$credit_Plac_per_Seventy,
        		)
    				);
			return redirect('creditevaluate/success');
	}

    }
}
