<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('title', 75);
            $table->string('slug', 100)->unique();
            $table->text('description');
            $table->double('price', 10, 2);
            $table->double('old_price', 10, 2)->nullable()->default(0);
            $table->string('image', 255);
            $table->string('youtube', 255)->nullable();
            $table->string('gallery', 1000);
            $table->tinyInteger('product_category_id');
            $table->boolean('is_popular')->nullable()->default(0);
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
        Schema::dropIfExists('products');
    }
}
