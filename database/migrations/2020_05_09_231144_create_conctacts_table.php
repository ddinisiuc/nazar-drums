<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateConctactsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('conctacts', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name', 75);
            $table->string('email', 255);
            $table->string('subject', 75);
            $table->string('message', 500);
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
        Schema::dropIfExists('conctacts');
    }
}
