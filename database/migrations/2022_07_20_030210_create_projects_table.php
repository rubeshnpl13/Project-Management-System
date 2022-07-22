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
        Schema::create('projects', function (Blueprint $table) {
            $table->id();
            $table->BigInteger('batch_id')->unsigned(); 
            $table->foreign('batch_id')->references('id')->on('batches');
            $table->string('title');
            // $table->BigInteger('academic_supervisor_id')->unsigned(); 
            // $table->foreign('supervisor_id')->references('id')->on('supervisors');
            // $table->BigInteger('technical_supervisor_id')->unsigned(); 
            // $table->foreign('supervisor_id')->references('id')->on('supervisors');
            $table->unsignedBigInteger('created_by');
            $table->unsignedBigInteger('updated_by')->nullable();
            $table->foreign('created_by')->references('id')->on('users');
            $table->foreign('updated_by')->references('id')->on('users');
            $table->softDeletes();
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
        Schema::dropIfExists('projects');
    }
};
