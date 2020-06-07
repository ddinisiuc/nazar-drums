<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // Create table for storing roles
        Schema::create('posts', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('category_id')->nullable();
            $table->string('title');
            $table->string('title_two')->nullable();
            $table->string('seo_title')->nullable();
            $table->text('excerpt');
            $table->text('description');
            $table->string('image',255)->nullable();
            $table->string('gallery',1000)->nullable();
            $table->string('slug')->unique();
            $table->string('meta_description', 1000);
            $table->text('meta_keywords');
            $table->enum('status', ['PUBLISHED', 'DRAFT', 'PENDING'])->default('DRAFT');
            $table->integer('order')->nullable()->default(1);
            $table->boolean('featured')->default(0);
            $table->timestamps();

            $table->foreign('author_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('posts');
    }
}
