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
        Schema::create('times', function (Blueprint $table) {
            $table->id('id_time');
            $table->timestamps();
            $table->string('hrs_periodo');
            $table->string('hrs_dia');
            $table->string('hrs_semana');
            $table->string('hrs_mes');
            $table->string('periodo');
            $table->string('pago_mes');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('times');
    }
};
