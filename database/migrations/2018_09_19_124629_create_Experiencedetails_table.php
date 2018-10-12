<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateExperiencedetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Experiencedetails', function (Blueprint $table) {
            $table->increments('exp_id')->unsigned();
            $table->string('academic_position');
            $table->string('academic_institution_name');
            $table->integer('academic_years_exp');
            $table->integer('academic_months_exp');
            $table->string('industrial_position');
            $table->string('industrial_institution_name');
            $table->integer('industrial_years_exp');
            $table->integer('industrial_months_exp');
            $table->string('research_position');
            $table->string('research_institution_name');
            $table->integer('research_years_exp');
            $table->integer('research_months_exp');
            $table->integer('editExperience')->default('0');
            $table->timestamps();
        });

        Schema::table('Experiencedetails', function($table){
            $table->foreign('exp_id')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
         Schema::dropIfExists('Experiencedetails');
    }
}
