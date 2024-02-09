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
        Schema::create('lineas', function (Blueprint $table) {
            $table->unsignedBigInteger('cedula');
            $table->id();
            $table->string('codigo');
            $table->string('numero') ->unique();
            $table->string('plan');
            $table->string('pago');
            $table->string('estado_linea');
            $table->date('fecha');
            $table->timestamps();
            $table->foreign('cedula')->references('cedula')->on('clientes');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('lineas');
    }
};
