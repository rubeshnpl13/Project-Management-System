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
        Schema::create('batch_courses', function (Blueprint $table) {
            $table->id();
            $table->BigInteger('batch_id')->unsigned(); 
            $table->foreign('batch_id')->references('id')->on('batches');
            $table->BigInteger('course_id')->unsigned(); 
            $table->foreign('course_id')->references('id')->on('courses');

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
        Schema::dropIfExists('batch_courses');
    }
};
