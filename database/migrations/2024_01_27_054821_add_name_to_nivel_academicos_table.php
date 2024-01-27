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
        Schema::table('nivel_academicos', function (Blueprint $table) {
            $table->string('name')->after('id');
            $table->dropColumn('nivel_academico');
            $table->dropColumn('nombre_institucion');
            $table->dropColumn('carrera');
            $table->dropColumn('periodo_escolar');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('nivel_academicos', function (Blueprint $table) {
            //
        });
    }
};
