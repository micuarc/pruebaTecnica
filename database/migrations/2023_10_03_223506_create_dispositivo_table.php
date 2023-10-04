<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('dispositivo', function (Blueprint $table) {
            $table->id('idDispositivo');
            $table->unsignedBigInteger('idModelo');
            $table->unsignedBigInteger('idBodega');
            $table->string('nombreDispositivo');
            $table->foreign('idModelo')->references('idModelo')->on('modelo');
            $table->foreign('idBodega')->references('idBodega')->on('bodega');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('dispositivo');
    }
};
