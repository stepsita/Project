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
        Schema::create('contrato_planes', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('operador');
            $table->unsignedBigInteger('plan');
            $table->unsignedBigInteger('linea');
            $table->timestamps();
            $table->foreign('operador')->references('id')->on('operadores');
            $table->foreign('plan')->references('id')->on('planes');
            $table->foreign('linea')->references('id')->on('lineas');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('contrato_planes');
    }
};
