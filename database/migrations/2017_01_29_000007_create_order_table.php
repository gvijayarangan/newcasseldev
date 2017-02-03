<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrderTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('order', function (Blueprint $table) {
            $table->integer('user_id')->unsigned();
            $table->increments('order_id');
            $table->integer('apt_id')->unsigned();
            $table->integer('ca_id')->unsigned();
            $table->string('order_description');
            $table->string('order_date_created');
            $table->string('order_priority');
            $table->string('order_status');
            $table->softDeletes();

            $table->foreign('user_id')->references('id')->on('users')
                ->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('apt_id')->references('apt_id')->on('apartment')
                ->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('ca_id')->references('ca_id')->on('comarea')
                ->onUpdate('cascade')->onDelete('cascade');

            /*$table->primary(['order_id']);*/
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('order');
    }
}
