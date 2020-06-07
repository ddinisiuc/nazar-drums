<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProjectBenefitsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('project_benefits', function (Blueprint $table) {
            $table->tinyIncrements('id');
            $table->string('icons', 25);
            $table->string('title', 75);
            $table->string('description', 255);
            $table->tinyInteger('project_id');
            $table->boolean('status')->nullable()->default(0);
            $table->integer('order')->nullable()->default(1);
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
        Schema::dropIfExists('project_benefits');
    }
}
