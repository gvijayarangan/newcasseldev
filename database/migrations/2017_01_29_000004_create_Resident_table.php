<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateResidentTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('resident', function (Blueprint $table) {
            $table->increments('res_id');
            $table->string('res_pccid');
            $table->string('res_fname');
            $table->string('res_mname');
            $table->string('res_lname');
            $table->string('res_gender');
            $table->string('res_phone');
            $table->string('res_cellphone');
            $table->string('res_email');
            $table->string('res_comment');
            $table->string('res_status');
            $table->integer('apt_id')->unsigned();
        });

        Schema::table('resident', function (Blueprint $table) {
            $table->foreign('apt_id')->references('apt_id')->on('apartment')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('resident');
    }
}

