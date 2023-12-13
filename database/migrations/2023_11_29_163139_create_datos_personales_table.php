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
        Schema::create('datos_personales', function (Blueprint $table) {
            $table->id('id_datos');
            $table->timestamps();
            $table->string('apel_pat');
            $table->string('apel_mat');
            $table->string('nombre');
            $table->date('fecha_nac');
            $table->string('edad');
            $table->string('genero');
            $table->string('estado_civil');
            $table->string('curp');
            $table->string('rfc');
            $table->string('lugar_nac');
            $table->string('nacionalidad');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('datos_personales');
    }
};
