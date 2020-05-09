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
            $table->string('title_two');
            $table->string('seo_title')->nullable();
            $table->text('excerpt');
            $table->text('description');
            $table->string('image')->nullable();
            $table->string('gallery')->nullable();
            $table->string('slug')->unique();
            $table->text('meta_description')->unique();
            $table->text('meta_keywords')->unique();
            $table->enum('status', ['PUBLISHED', 'DRAFT', 'PENDING'])->default('DRAFT');
            $table->integer('order')->nullable()->default(1);
            $table->boolean('featured')->default(0);
            $table->timestamps();

            //$table->foreign('author_id')->references('id')->on('users');
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
