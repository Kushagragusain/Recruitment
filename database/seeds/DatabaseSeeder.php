<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);

        DB::table('Admins')->insert([
            'name' => 'admin',
            'email' => 'admin@mail.com',
            'password' => bcrypt('password'),
        ]);
           DB::table('Givepoints')->insert([
            'give_id' => '1',
            'Ext_Spons_RD_PI_point' => '8',
            'Ext_Spons_RD_COPI_point' => '5',
            'patent_granted_PI_point' => '8',
            'patent_granted_COPI_point'=>'5',
            'Consult_Proj_PI_point'=> '2',
            'phd_sole_super_point' => '8',
            'phd_First_super_point'=> '5',
            'phd_co_super_point'=> '3',
            'Jour_main_author_point'=> '4',
            'Jour_co_author_point'=> '2',
            'Confer__main_author_point'=> '1',
            'conference_co_author_point'=> '0.6',
            'HOD_point'=> '2',
            'DEAN_point'=>'2',
            'Cheif_Warden_point'=>'2',
            'Prof_TnP_point'=>'2',
            'Advisor_estate_point'=>'2',
            'CVO_point'=>'2',
            'PI_exam_point'=>'2',
            'TEQUIP_coordinator_point'=>'2',
            'Warden_point'=>'1',
            'AsstWarden_point'=>'1',
            'Associate_Dean_point'=>'1',
            'Chair_academic_comm_point'=>'1',
            'Comp_Centre_incharge_point'=>'1',
            'IT_services_incharge_point'=>'1',
            'Library_incharge_point'=>'1',
            'Admission_incharge_point'=>'1',
            'Stud_Act_incharge_point'=>'1',
            'Other_incharge_point'=>'1',
            'Chair_Con_Standing_Comm_point'=> '0.5',
            'Dept_Activity_HOD_point'=>'0.5',
            'Workshop_Coordinator_point'=> '2',
            'Nat_Prog_Two_Weeks_point'=>'2',
            'Nat_Prog_One_Weeks_point'=>'1',
            'Nat_Conf_Organized_point'=>'3',
            'Length_service_point'=>'1',
            'Est_Lab_point'=>'4',
            'Theory_Teaching_point'=>'1',
            'PG_Dist_Guided_point'=>'0.5',
            'UG_Projects_point'=>'0.25',
            'Book_Pub_Inter_point'=> '6',
            'Book_Pub_Nat_point'=>'2',
            'Outreach_Inst_activity_point'=>'1',
            'Fellow_IEEE_point'=>'10',
            'Plac_Per_Eight_point'=>'4',
            'Plac_per_Seventy_point'=>'2',
            'editPersonal' => '0',
            'editEducation' => '0',
            'editExperience' => '0',
            'editCredit' => '0',
            'editSummary'=> '0',
            'editUpload' =>'0',
            'visit' => '0',

        ]);
 
    }
}
