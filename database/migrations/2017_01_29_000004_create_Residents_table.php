<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateResidentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('residents', function (Blueprint $table) {
            $table->increments('id');
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

        Schema::table('residents', function (Blueprint $table) {
            $table->foreign('apt_id')->references('id')->on('apartments')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('residents');
    }
}

