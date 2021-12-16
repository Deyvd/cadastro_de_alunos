<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudentResponsiblesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('student_responsibles', function (Blueprint $table) {
            $table->id(); 
            $table->unsignedBigInteger('responsible_id');
            $table->unsignedBigInteger('student_id');
            $table->string('parentage', 45);
            $table->timestamps();

            $table->foreign('responsible_id')->references('id')->on('persons');
            $table->foreign('student_id')->references('id')->on('persons');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('student_responsibles');
    }
}
