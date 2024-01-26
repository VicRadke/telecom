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
        Schema::create('referencias', function (Blueprint $table) {
            $table->id('id_referencia');
            $table->string('nombre_referencia_personal');
            $table->string('direccion_referencia_personal');
            $table->string('telefono_referencia_personal');
            $table->string('nombre_referencia_persona_2');
            $table->string('direccion_referencia_persona_2');
            $table->string('telefono_referencia_persona_2');


            $table->timestamps();

            

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('referencias');
    }
};
