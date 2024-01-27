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
        Schema::table('referencias', function (Blueprint $table) {
            $table->unsignedBigInteger('id_prestador')->nullable();
            $table->foreign('id_prestador')->references('id_prestador')->on('prestadores');
            $table->dropColumn('nombre_referencia_persona_2');
            $table->dropColumn('direccion_referencia_persona_2');
            $table->dropColumn('telefono_referencia_persona_2');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('referencias', function (Blueprint $table) {
            
        });
    }
};
