<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAptressTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('aptress', function (Blueprint $table) {
            $table->integer('apt_id')->unsigned();
            $table->integer('res_id')->unsigned();
            $table->date('start_date');
            $table->date('end_date');
            $table->string('status');
            $table->softDeletes();

            $table->foreign('apt_id')->references('id')->on('apartments')
                ->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('res_id')->references('id')->on('residents')
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
        Schema::drop('aptress');
    }
}
