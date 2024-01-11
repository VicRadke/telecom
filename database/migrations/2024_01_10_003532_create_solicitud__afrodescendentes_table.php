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
        Schema::create('solicitud__afrodescendentes', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('es_afrodescendiente');
            $table->string('es_lengua_indigena');
            $table->string('es_migrante');
            
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('solicitud__afrodescendentes');
    }
};
