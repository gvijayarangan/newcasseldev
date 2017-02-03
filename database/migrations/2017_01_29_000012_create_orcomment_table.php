<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrcommentTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orcomment', function (Blueprint $table) {
            $table->increments('orcom_id');
            $table->integer('order_id')->unsigned();
            $table->integer('user_id')->unsigned();
            $table->timestamps();
            $table->string('orcom_comments');
            $table->softDeletes();

            $table->foreign('user_id')->references('id')->on('users')
                ->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('order_id')->references('order_id')->on('order')
                ->onUpdate('cascade')->onDelete('cascade');

          /*  $table->primary(['orcom_id']); */
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('orcomment');
    }
}
