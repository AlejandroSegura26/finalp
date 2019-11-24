<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CrateFacturasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('facturas', function (Blueprint $table) {
      
            $table->bigIncrements('id');
            $table->string('codigo_factura',30);
            $table->dateTime('fecha_factura');
            $table->dateTime('vencimiento_factura');
            $table->tinyInteger('estado_factura');
            $table->float('monto');
            $table->float('monto_pagado');
        });
    } 
     
                    
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('facturas');
    }
}
