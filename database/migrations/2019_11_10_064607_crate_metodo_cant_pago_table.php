<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CrateMetodoCantPagoTable extends Migration
{
       /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('metodo_cant_pago', function (Blueprint $table) {
      
            $table->bigIncrements('id');
            $table->float('cantidad_actual');
            $table->unsignedBigInteger('id_metodo');
            $table->foreign('id_metodo')->references('id')->on('metodo_pagos')->onDelete('cascade');      
           
     
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('metodo_cant_pago');
    }
}
