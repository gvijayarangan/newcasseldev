<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateConResTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('con_res', function (Blueprint $table) {
            $table->integer('res_id')->unsigned();
            $table->integer('con_id')->unsigned();
        });

        Schema::table('con_res', function (Blueprint $table) {
            $table->foreign('res_id')->references('res_id')->on('resident')->onDelete('cascade');
             $table->foreign('con_id')->references('con_id')->on('res_contact')->onDelete('cascade');
            });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('con_res');
    }
}

