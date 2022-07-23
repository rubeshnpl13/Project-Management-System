<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('course_evaluation_criteria', function (Blueprint $table) {
            $table->id();
            $table->BigInteger('course_id')->unsigned(); 
            $table->foreign('course_id')->references('id')->on('courses');
            $table->BigInteger('evaluation_criteria_id')->unsigned(); 
            $table->foreign('evaluation_criteria_id')->references('id')->on('evaluation_criterias');

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
        Schema::dropIfExists('course_evaluation_criteria');
    }
};
