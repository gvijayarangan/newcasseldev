<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateApartmentTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */

    public function up()
    {
        Schema::create('apartment', function (Blueprint $table) {
            $table->increments('apt_id');
            $table->integer('apt_floornumber');
            $table->string('apt_number');
            $table->string('apt_comments');
            $table->integer('cntr_id')->unsigned();
        });

        Schema::table('apartment', function (Blueprint $table) {
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
        Schema::drop('apartment');
    }
}
