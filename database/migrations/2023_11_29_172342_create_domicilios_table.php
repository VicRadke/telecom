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
            $table->id('id_domicilio');
            $table->timestamps();
            $table->string('calle');
            $table->string('no_exterior');
            $table->string('no_interior');
            $table->string('colonia');
            $table->string('cp');
            $table->string('tel_fijo');
            $table->string('tel_movil');
            $table->string('email');
            $table->string('entidad');
            $table->string('alcaldia');

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
