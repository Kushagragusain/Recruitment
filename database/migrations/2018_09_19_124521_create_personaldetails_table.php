<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePersonaldetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Personaldetails', function (Blueprint $table) {
            $table->increments('user_id')->unsigned();
            $table->string('candidate_name');
            $table->date('DOB');
            $table->string('gender');
            $table->string('father_name');
            $table->string('post_applied');
            $table->string('department');
            $table->string('category');
            $table->string('marital_status');
            $table->longText('Permanent_address');
            $table->integer('editPersonal')->default('0');
            $table->timestamps();
        });

        Schema::table('Personaldetails', function($table){
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
         Schema::dropIfExists('Personaldetails');
    }
}
