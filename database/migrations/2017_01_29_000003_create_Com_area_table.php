<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateComAreaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('comarea', function (Blueprint $table) {
            $table->increments('ca_id');
            $table->string('ca_name');
            $table->String('ca_comments');
            $table->integer('cntr_id')->unsigned();
        });

        Schema::table('comarea', function (Blueprint $table) {
            $table->foreign('cntr_id')->references('cntr_id')->on('center')->onDelete('cascade');
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('comarea');
    }
}
