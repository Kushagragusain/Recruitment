<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCreditpointssummaryTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Creditpointssummarys', function (Blueprint $table) {
            $table->increments('creditsum_id')->unsigned();
            $table->float('credit_Ext_Spons_RD_PI');
            $table->float('credit_Ext_Spons_RD_COPI');
            $table->float('credit_patent_granted_PI');
            $table->float('credit_patent_granted_COPI');
            $table->float('credit_Consult_Proj_PI');
            $table->float('credit_phd_sole_super');
            $table->float('credit_phd_First_super');
            $table->float('credit_phd_co_super');
            $table->float('credit_Jour_main_author');
            $table->float('credit_Jour_co_author');
            $table->float('credit_Confer__main_author');
            $table->float('credit_conference_co_author');
            $table->float('credit_HOD');
            $table->float('credit_DEAN');
            $table->float('credit_Cheif_Warden');
            $table->float('credit_Prof_TnP');
            $table->float('credit_Advisor_estate');
            $table->float('credit_CVO');
            $table->float('credit_PI_exam');
            $table->float('credit_TEQUIP_coordinator');
            $table->float('credit_Warden');
            $table->float('credit_AsstWarden');
            $table->float('credit_Associate_Dean');
            $table->float('credit_Chair_academic_comm');
            $table->float('credit_Comp_Centre_incharge');
            $table->float('credit_IT_services_incharge');
            $table->float('credit_Library_incharge');
            $table->float('credit_Admission_incharge');
            $table->float('credit_Stud_Act_incharge');
            $table->float('credit_Other_incharge');
            $table->float('credit_Chair_Con_Standing_Comm');
            $table->float('credit_Dept_Activity_HOD');
            $table->float('credit_Workshop_Coordinator');
            $table->float('credit_Nat_Prog_Two_Weeks');
            $table->float('credit_Nat_Prog_One_Weeks');
            $table->float('credit_Nat_Conf_Organized');
            $table->float('credit_Length_service');
            $table->float('credit_Est_Lab');
            $table->float('credit_Theory_Teaching');
            $table->float('credit_PG_Dist_Guided');
            $table->float('credit_UG_Projects');
            $table->float('credit_Book_Pub_Inter');
            $table->float('credit_Book_Pub_Nat');
            $table->float('credit_Outreach_Inst_activity');
            $table->float('credit_Fellow_IEEE');
            $table->float('credit_Plac_Per_Eight');
            $table->float('credit_Plac_per_Seventy');
            $table->float('total_Credit_Points')->default('0');
            $table->integer('editSummary')->default('0');
            $table->timestamps();
        });

         Schema::table('Creditpointssummarys', function($table){
            $table->foreign('creditsum_id')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Creditpointssummarys');
    }
}
