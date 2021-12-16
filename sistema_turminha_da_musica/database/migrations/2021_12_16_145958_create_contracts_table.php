<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContractsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contracts', function (Blueprint $table) {
            $table->id();
            $table->decimal('value', 10, 2);
            $table->decimal('membership_free', 10, 2);
            $table->date('starts_at');
            $table->enum('is_free', ['y', 'n']);
            $table->date('ends_at');
            $table->enum('frequency_payment', ['m', 't', 'a']);
            $table->integer('expiration_day');
            $table->dateTime('assigned_at');
            $table->decimal('upfront_discount', 10, 2);
            $table->decimal('contract_discount', 10, 2);
            $table->unsignedBigInteger('student_id');
            $table->unsignedBigInteger('responsible_id');
            $table->unsignedBigInteger('place_id');
            $table->decimal('contract_interest', 10, 2);
            $table->enum('is_particular', ['y', 'n']);
            $table->unsignedBigInteger('class_room_id');
            $table->timestamps();

            $table->foreign('student_id')->references('id')->on('students');
            $table->foreign('responsible_id')->references('id')->on('responsibles');
            $table->foreign('place_id')->references('id')->on('places');
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
        Schema::dropIfExists('contracts');
    }
}
