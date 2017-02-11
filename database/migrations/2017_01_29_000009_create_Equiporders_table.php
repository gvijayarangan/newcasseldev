<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEquipOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('equiporders', function (Blueprint $table) {

            $table->integer('equ_id')->unsigned();
            $table->integer('order_id')->unsigned();
        });

        Schema::table('equiporders', function (Blueprint $table) {
            $table->foreign('equ_id')->references('id')->on('equipments')->onDelete('cascade');
            $table->foreign('order_id')->references('id')->on('orders')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('equiporders');
    }
}
