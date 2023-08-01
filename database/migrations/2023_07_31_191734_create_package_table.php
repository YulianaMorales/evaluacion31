<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

 class createpackagetable extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('package', function (Blueprint $table) {
            $table->id('codigo');
            $table->string('descripcion');
            $table->string('destinario');
            $table->string('direccion');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::dropIfExists('package');
    }
};
