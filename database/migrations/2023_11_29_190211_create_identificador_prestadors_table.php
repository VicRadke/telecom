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
        Schema::create('identificador_prestadors', function (Blueprint $table) {
            $table->id('id_prestador');
            $table->timestamps();
            $table->string('identificador');
            $table->string('no_identificador');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('identificador_prestadors');
    }
};
