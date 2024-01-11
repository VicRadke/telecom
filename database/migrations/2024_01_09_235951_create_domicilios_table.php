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
        Schema::create('domicilios', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('calle');
            $table->string('numero_exterior');
            $table->string('numero_interior');
            $table->string('colonia');
            $table->string('codigo_postal');
            $table->string('entidad_federativa');
            $table->string('alcaldia_municipio');

            $table->unsignedBigInteger('id_prestador');
            $table->foreign('id_prestador')->references('id_prestador')->on('prestadores');
            

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('domicilios');
    }
};
