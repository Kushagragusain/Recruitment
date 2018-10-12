<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGivepointsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Givepoints', function (Blueprint $table) {
            $table->increments('give_id');
            $table->integer('Ext_Spons_RD_PI_point');
            $table->integer('Ext_Spons_RD_COPI_point');
            $table->integer('patent_granted_PI_point');
            $table->integer('patent_granted_COPI_point');
            $table->integer('Consult_Proj_PI_point');
            $table->integer('phd_sole_super_point');
            $table->integer('phd_First_super_point');
            $table->integer('phd_co_super_point');
            $table->integer('Jour_main_author_point');
            $table->integer('Jour_co_author_point');
            $table->integer('Confer__main_author_point');
            $table->float('conference_co_author_point');
            $table->integer('HOD_point');
            $table->integer('DEAN_point');
            $table->integer('Cheif_Warden_point');
            $table->integer('Prof_TnP_point');
            $table->integer('Advisor_estate_point');
            $table->integer('CVO_point');
            $table->integer('PI_exam_point');
            $table->integer('TEQUIP_coordinator_point');
            $table->integer('Warden_point');
            $table->integer('AsstWarden_point');
            $table->integer('Associate_Dean_point');
            $table->integer('Chair_academic_comm_point');
            $table->integer('Comp_Centre_incharge_point');
            $table->integer('IT_services_incharge_point');
            $table->integer('Library_incharge_point');
            $table->integer('Admission_incharge_point');
            $table->integer('Stud_Act_incharge_point');
            $table->integer('Other_incharge_point');
            $table->float('Chair_Con_Standing_Comm_point');
            $table->float('Dept_Activity_HOD_point');
            $table->integer('Workshop_Coordinator_point');
            $table->integer('Nat_Prog_Two_Weeks_point');
            $table->integer('Nat_Prog_One_Weeks_point');
            $table->integer('Nat_Conf_Organized_point');
            $table->integer('Length_service_point');
            $table->integer('Est_Lab_point');
            $table->integer('Theory_Teaching_point');
            $table->float('PG_Dist_Guided_point');
            $table->float('UG_Projects_point');
            $table->integer('Book_Pub_Inter_point');
            $table->integer('Book_Pub_Nat_point');
            $table->integer('Outreach_Inst_activity_point');
            $table->integer('Fellow_IEEE_point');
            $table->integer('Plac_Per_Eight_point');
            $table->integer('Plac_per_Seventy_point');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
         Schema::dropIfExists('Givepoints');
    }
}
