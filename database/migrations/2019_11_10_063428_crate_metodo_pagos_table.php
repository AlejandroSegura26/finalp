<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CrateMetodoPagosTable extends Migration
{
     /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('metodo_pagos', function (Blueprint $table) {
      
            $table->bigIncrements('id');
            $table->binary('imagen_mp');
            $table->binary('nombre_mp',50);
            $table->float('cantidad_minretiro');
            $table->float('cantidad_maxretiro');
            $table->float('cargo_retiro');
            $table->float('porcentaje_cargo');
            $table->float('taza_mp');
            $table->string('moneda_mp',30);
            $table->integer('dias_habiles');
            $table->tinyInteger('estado_mp');
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
        Schema::dropIfExists('metodo_pagos');
    }
}
