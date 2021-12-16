<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateExperimentalClassesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('experimental_classes', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('class_room_id');
            $table->string('name',255);
            $table->dateTime('shedule');
            $table->timestamps();

            $table->foreign('class_room_id')->references('id')->on('class_rooms');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('experimental_classes');
    }
}
