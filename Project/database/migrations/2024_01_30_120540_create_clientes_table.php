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
        Schema::create('clientes', function (Blueprint $table) {
            $table->id('cedula');
            $table->string('nombre');
            $table->string('apellido');
            $table->date('fecha_nac');
            $table->string('estado');
            $table->string('ciudad');
            $table->string('municipio');
            $table->string('calle');
            $table->string('correo')->unique();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('clientes');
    }
};
