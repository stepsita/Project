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
        Schema::create('contrato_servicios', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('operador');
            $table->unsignedBigInteger('servicio');
            $table->unsignedBigInteger('linea');
            $table->string('estado_servicio');
            $table->timestamps();
            $table->foreign('operador')->references('id')->on('operadores');
            $table->foreign('servicio')->references('id')->on('servicios');
            $table->foreign('linea')->references('id')->on('lineas');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('contrato_servicios');
    }
};
