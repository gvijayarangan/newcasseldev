<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNotificationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('notification', function (Blueprint $table) {
            $table->increments('noti_id');
            $table->string('noti_type');
            $table->string('noti_alertcontent');
            $table->string('noti_status'); /*res_status*/
            $table->string('noti_emailtitle');
            $table->softDeletes();

            /*$table->primary(['noti_id']); */
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('notification');
    }
}
