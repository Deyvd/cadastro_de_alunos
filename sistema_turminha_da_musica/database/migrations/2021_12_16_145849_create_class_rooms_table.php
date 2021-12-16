<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClassRoomsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('class_rooms', function (Blueprint $table) {
            $table->id();
            $table->string('name', 255);
            $table->time('start_time');
            $table->time('end_time');
            $table->unsignedBigInteger('course_id');
            $table->enum('frequency',['w', 'd']);
            $table->enum('modality', ['o', 'p']);
            $table->unsignedBigInteger('room_id');
            $table->integer('days_of_week');
            $table->timestamps();

            $table->foreign('course_id')->references('id')->on('courses');
            $table->foreign('room_id')->references('id')->on('rooms');
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('class_rooms');
    }
}
