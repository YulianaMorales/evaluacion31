<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

 class createcamionetable extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('camione', function (Blueprint $table) {
            $table->id('dni');//el dni es la clave primaria (id)
            $table->string('nombre');
            $table->string('poblacion');
            $table->string('telefono');
            $table->string('direccion');
            $table->decimal('salario');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::dropIfExists('camione');
    }
};
