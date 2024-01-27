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
        Schema::create('prestadores', function (Blueprint $table) {
            $table->id('id_prestador');
            $table->timestamps();
            $table->string('nombre');
            $table->string('apellido_paterno');
            $table->string('apellido_materno');
            $table->string('tipo_identificacion');
            $table->string('fecha_nacimineto');
            $table->string('genero');
            $table->string('estado_civil');
            $table->string('curp');
            $table->string('rfc');
            $table->string('lugar_nacimiento');
            $table->string('nacionalidad');
            //domicilio 
            $table->string('calle',);
            $table->string('numero_exterior');
            $table->string('numero_interior');
            $table->string('colonia');
            $table->string('codigo_postal');
            $table->string('entidad_federativa');
            $table->string('alcaldia_municipio');
            //modalidad
            $table->string('modalidad');
            $table->string('turno');
            $table->string('es_migrante');
            $table->string('es_afrodescendiente');
            $table->string('es_lengua_indigena');
            $table->string('telefono');
            $table->string('celular');
            $table->string('correo');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('prestadores');
    }
};
