<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEducationdetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         Schema::create('Educationdetails', function (Blueprint $table) {
            $table->increments('edu_id')->unsigned();
            $table->string('phd_stream');
            $table->integer('phd_marks');
            $table->integer('phd_passing_year');
            $table->string('phd_university');
            $table->string('pg_stream');
            $table->integer('pg_marks');
            $table->integer('pg_passing_year');
            $table->string('pg_university');
            $table->string('ug_stream');
            $table->integer('ug_marks');
            $table->integer('ug_passing_year');
            $table->string('ug_university');
            $table->string('inter_stream');
            $table->integer('inter_marks');
            $table->integer('inter_passing_year');
            $table->string('inter_university');
            $table->string('high_school_stream');
            $table->string('high_school_marks');
            $table->integer('high_school_passing_year');
            $table->string('high_school_university');
            $table->string('phd_title');
            $table->string('phd_field_spec');
            $table->integer('editEducation')->default('0');
                 });

          Schema::table('Educationdetails', function($table){
            $table->foreign('edu_id')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
         Schema::dropIfExists('Educationdetails');
    }
}
