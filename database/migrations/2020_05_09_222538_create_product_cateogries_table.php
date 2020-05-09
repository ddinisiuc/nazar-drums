<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductCateogriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product_cateogries', function (Blueprint $table) {
            $table->tinyIncrements('id');
            $table->string('title', 75);
            $table->string('slug', 100)->unique();
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
        Schema::dropIfExists('product_cateogries');
    }
}
