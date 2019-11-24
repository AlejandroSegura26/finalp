<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CrateSliderSitioTable extends Migration
{
      /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('slider_sitio', function (Blueprint $table) {
      
            $table->bigIncrements('id');
            $table->unsignedBigInteger('id_sitio');
            $table->foreign('id_sitio')->references('id')->on('sitio')->onDelete('cascade');
            $table->string('enlace_imagen',500);          
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('slider_sitio');
    }

}
