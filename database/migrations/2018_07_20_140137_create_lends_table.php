<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLendsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lends', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('camera_id')->unsigned();
            $table->integer('year');
            $table->integer('month');
            $table->integer('day');
            $table->timestamps();
            $table->foreign('camera_id')->references('id')->on('cameras');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('lends');
    }
}
