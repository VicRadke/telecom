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
        Schema::table('modalidads', function (Blueprint $table) {
            $table->string('name')->after('id');
            $table->dropColumn('practicas_profesionales');
            $table->dropColumn('estadia_profesional');
            $table->dropColumn('practicas_laborales');
            $table->dropColumn('residencias_profesionales');
            $table->dropColumn('servicio_social');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('modalidads', function (Blueprint $table) {
            $table->dropColumn('name');
        });
    }
};
