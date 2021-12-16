<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePersonsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('persons', function (Blueprint $table) {
            $table->id();
            $table->string('name', 255);
            $table->string('cpfCnpj', 25);
            $table->date('birthday');
            $table->string('ocupation', 100);
            $table->unsignedBigInteger('phone_id');
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('person_type_id');
            $table->timestamps();

            $table->foreign('phone_id')->references('id')->on('phones');
            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('person_type_id')->references('id')->on('person_types');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
