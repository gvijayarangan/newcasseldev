<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEquipOrderTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('equip_order', function (Blueprint $table) {

            $table->integer('equ_id')->unsigned();
            $table->integer('order_id')->unsigned();
        });

        Schema::table('equip_order', function (Blueprint $table) {
            $table->foreign('equ_id')->references('equ_id')->on('equipment')->onDelete('cascade');
            $table->foreign('order_id')->references('order_id')->on('order')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('equip_order');
    }
}
