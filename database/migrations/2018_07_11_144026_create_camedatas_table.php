<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCamedatasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('camedatas', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('camera_id')->unsigned()->index();
            $table->string('lens')->nullable();
            $table->integer('year')->nullable();
            $table->string('scene')->nullable();
            $table->timestamps();
            
            
            $table->foreign('camera_id')->references('id')->on('cameras')->onDelete('cascade');
        });
        
        
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('camedatas');
    }
}
