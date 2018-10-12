<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUploadsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        
        Schema::create('Uploads', function (Blueprint $table) {
            $table->increments('upload_id')->unsigned();
            $table->string('candidate_image');
            $table->string('candidate_sign');
            $table->integer('editUpload')->default('0');
            $table->timestamps();
        });

        Schema::table('Uploads', function($table){
            $table->foreign('upload_id')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Uploads');
    }
}
