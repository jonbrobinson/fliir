<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEventsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('events', function (Blueprint $table) {
            $table->increments('id');
            $table->string('event_id');
            $table->string('title');
            $table->text('description');
//            $table->string('twitter');
//            $table->string('facebook');
//            $table->string('eb_url');
//            $table->string('startDate', 60);
//            $table->string('endDate');
//            $table->string('startTime');
//            $table->string('endTime');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('events');
    }
}
