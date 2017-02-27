<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateResContactsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rescontacts', function (Blueprint $table) {
            $table->increments('id');
            $table->string('con_fname');
            $table->string('con_mname');
            $table->string('con_lname');
            $table->string('con_relationship');
            $table->biginteger('con_cellphone');
            $table->string('con_email');
            $table->string('con_comment');
            $table->string('con_gender');
            $table->string('con_res_id’);
          
        });

   
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('rescontacts');
    }
}