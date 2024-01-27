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
        Schema::table('parentescos', function (Blueprint $table) {
            $table->string('name')->nullable();
            // eliminamos otras columnas
            $table->dropColumn('nombre_parentesco');
            $table->dropColumn('telefono_emergencia');
            $table->dropForeign(['id_referencia']);
            $table->dropColumn('id_referencia');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('parentescos', function (Blueprint $table) {
            $table->dropColumn('name');
        });
    }
};
