<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProjectsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('projects', function (Blueprint $table) {
            $table->tinyIncrements('id');
            $table->string('title', 75);
            $table->string('slug', 100)->unique();
            $table->string('excerpt', 255);
            $table->text('description');
            $table->string('banner_title', 225);
            $table->string('image_one', 255);
            $table->string('image_two', 255);
            $table->string('location', 255);
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
        Schema::dropIfExists('projects');
    }
}
