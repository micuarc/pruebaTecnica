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
        Schema::create('modelo', function (Blueprint $table) {
            $table->id('idModelo');
            $table->unsignedBigInteger('idMarca');
            $table->string('nombreModelo');
            $table->foreign('idMarca')->references('idMarca')->on('marca');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('modelo');
    }
};
