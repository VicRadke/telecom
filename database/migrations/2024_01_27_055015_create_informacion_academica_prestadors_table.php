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
        Schema::create('informacion_academica_prestadors', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_prestador');
            $table->unsignedBigInteger('id_nivel_academico');
            $table->string('nombre_institucion');
            $table->string('carrera')->nullable();
            $table->string('periodo_escolar');
            $table->foreign('id_prestador')->references('id_prestador')->on('prestadores');
            $table->foreign('id_nivel_academico')->references('id')->on('nivel_academicos');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('informacion_academica_prestadors');
    }
};
