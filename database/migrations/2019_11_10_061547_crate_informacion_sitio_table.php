<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CrateInformacionSitioTable extends Migration
{
     /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('informacion_sitio', function (Blueprint $table) {
      
            $table->bigIncrements('id');
            $table->longText('about_us');  
            $table->string('about_us_enlace',500);
            $table->string('about_us_imagen',500);
            $table->string('telefono',20);
            $table->string('maps',500);
            $table->string('footer_text',500);
            $table->string('footer_copy',500);
            $table->unsignedBigInteger('id_sitio');
            $table->foreign('id_sitio')->references('id')->on('sitio')->onDelete('cascade');      
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('informacion_sitio');
    }

}
