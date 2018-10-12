<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Creditpoint extends Model
{
    
 protected $fillable = [
        'credit_id','Mem_Spons_RD','Mem_patent_granted','Ext_Spons_RD_PI','Ext_Spons_RD_COPI','Spons_RD_PIORNOT','patent_granted_PI','patent_granted_COPI','Patent_PIORNOT','Consult_Proj_PI','phd_sole_super','phd_First_super','phd_co_super','Mem_phd_co_super','Jour_main_author','Jour_co_author','Mem_Jour_co_author','Confer__main_author','conference_co_author','Mem_conference_co_author','Confer_PIORNOT','HOD','DEAN','CVO','Cheif_Warden','Prof_TnP','Advisor_estate','PI_exam','TEQUIP_coordinator','Warden','AsstWarden','Associate_Dean','Chair_academic_comm','Comp_Centre_incharge','IT_services_incharge','Library_incharge','Admission_incharge','Stud_Act_incharge','Other_incharge','Chair_Con_Standing_Comm','Dept_Activity_HOD','Workshop_Coordinator','Nat_Prog_Two_Weeks','Nat_Prog_One_Weeks','Nat_Conf_Organized','Length_service','Est_Lab','Theory_Teaching','PG_Dist_Guided','UG_Projects','Book_Pub_Inter','Book_Pub_Nat','Outreach_Inst_activity','Fellow_IEEE','Plac_Per_Eight','Plac_per_Seventy',
    ];

}
