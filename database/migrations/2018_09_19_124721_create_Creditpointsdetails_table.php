<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCreditpointsdetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Creditpoints', function (Blueprint $table) {
            $table->increments('credit_id')->unsigned();
            $table->integer('Ext_Spons_RD_PI');
            $table->integer('Ext_Spons_RD_COPI');
            $table->integer('Mem_Spons_RD');
            $table->string('Spons_RD_PIORNOT');
            $table->integer('patent_granted_PI');
            $table->integer('patent_granted_COPI');
            $table->integer('Mem_patent_granted');
            $table->string('Patent_PIORNOT');
            $table->integer('Consult_Proj_PI');
            $table->integer('phd_sole_super');
            $table->integer('phd_First_super');
            $table->integer('phd_co_super');
            $table->integer('Mem_phd_co_super');
            $table->integer('Jour_main_author');
            $table->integer('Jour_co_author');
            $table->integer('Mem_Jour_co_author');
            $table->integer('Confer__main_author');
            $table->integer('conference_co_author');
            $table->integer('Mem_conference_co_author');
            $table->string('Confer_PIORNOT');
            $table->integer('HOD');
            $table->integer('DEAN');
            $table->integer('Cheif_Warden');
            $table->integer('Prof_TnP');
            $table->integer('Advisor_estate');
            $table->integer('CVO');
            $table->integer('PI_exam');
            $table->integer('TEQUIP_coordinator');
            $table->integer('Warden');
            $table->integer('AsstWarden');
            $table->integer('Associate_Dean');
            $table->integer('Chair_academic_comm');
            $table->integer('Comp_Centre_incharge');
            $table->integer('IT_services_incharge');
            $table->integer('Library_incharge');
            $table->integer('Admission_incharge');
            $table->integer('Stud_Act_incharge');
            $table->integer('Other_incharge');
            $table->integer('Chair_Con_Standing_Comm');
            $table->integer('Dept_Activity_HOD');
            $table->integer('Workshop_Coordinator');
            $table->integer('Nat_Prog_Two_Weeks');
            $table->integer('Nat_Prog_One_Weeks');
            $table->integer('Nat_Conf_Organized');
            $table->integer('Length_service');
            $table->integer('Est_Lab');
            $table->integer('Theory_Teaching');
            $table->integer('PG_Dist_Guided');
            $table->integer('UG_Projects');
            $table->integer('Book_Pub_Inter');
            $table->integer('Book_Pub_Nat');
            $table->integer('Outreach_Inst_activity');
            $table->integer('Fellow_IEEE');
            $table->integer('Plac_Per_Eight');
            $table->integer('Plac_per_Seventy');
            $table->integer('editCredit')->default('0');
            $table->timestamps();
        });

         Schema::table('Creditpoints', function($table){
            $table->foreign('credit_id')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Creditpoints');
    }
}
