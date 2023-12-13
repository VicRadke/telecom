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
        Schema::create('migrantes', function (Blueprint $table) {
            $table->id('id_migrante');
            $table->timestamps();
            $table->string('migrante');
            $table->string('especifique');
            $table->string('afro');
            $table->string('lengua');
            $table->string('cual');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('migrantes');
    }
};
