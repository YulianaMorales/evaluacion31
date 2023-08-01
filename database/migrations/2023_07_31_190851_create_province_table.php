<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class createprovincetable extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('province', function (Blueprint $table) {
            $table->id('codigo');
            $table->string('nombre');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::dropIfExists('province');
    }
};
