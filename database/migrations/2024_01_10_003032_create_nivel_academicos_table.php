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
        Schema::create('nivel_academicos', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('nombre_institucion');
            $table->string('nivel_academico');
            $table->string('carrera');
            $table->string('periodo_escolar');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('nivel_academicos');
    }
};
