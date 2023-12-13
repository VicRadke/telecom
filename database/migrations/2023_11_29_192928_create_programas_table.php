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
        Schema::create('programas', function (Blueprint $table) {
            $table->id('id_programa');
            $table->timestamps();
            $table->string('clave');
            $table->string('nombre');
            $table->string('vig_inicio');
            $table->string('vig_termino');
            $table->string('no_prestadores');
            $table->string('carreras');
            $table->string('cargo_resp');
            
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('programas');
    }
};
