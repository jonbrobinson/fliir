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
//            $table->integer('user_id')->unsigned();
            $table->string('title');
            $table->text('description');
            $table->string('photo_path');
            $table->string('street');
            $table->string('city', 40);
            $table->string('state', 40);
            $table->string('zip',10);
            $table->string('date_start');
            $table->string('date_end');
            $table->string('time_start');
            $table->string('time_end');
//            $table->string('twitter');
//            $table->string('facebook');
//            $table->string('eb_url');
//            $table->string('startDate', 60);
//            $table->string('endDate');
            $table->timestamps();

//            $table->foreign('user_id')
//                ->references('id')
//                ->on('users')
//                ->onDelete('cascade');
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
