<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePicdatasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('picdatas', function (Blueprint $table) {
            $table->increments('id');
              $table->integer('picture_id')->unsigned()->index();
              $table->string('speed');
              $table->string('f_value');
              $table->string('iso');
              $table->string('lens');
            $table->timestamps();
            
            
            $table->foreign('picture_id')->references('id')->on('pictures');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('picdatas');
    }
}
