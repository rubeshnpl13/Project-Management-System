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
        Schema::create('language_tools_project', function (Blueprint $table) {
            $table->id();
            $table->BigInteger('project_id')->unsigned(); 
            $table->foreign('project_id')->references('id')->on('projects');
            $table->BigInteger('language_tool_id')->unsigned(); 
            $table->foreign('language_tool_id')->references('id')->on('language_tools');
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
        Schema::dropIfExists('language_tools_project');
    }
};
