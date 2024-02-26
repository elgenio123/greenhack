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
        Schema::create('yields', function (Blueprint $table) {
            $table->id('id_yield');
            $table->unsignedBigInteger('id_plot');
            $table->foreign('id_plot')->references('id_plots')->on('plots');
            $table->float('yield_kg_per_ha');
            $table->date('harvest_date');
            $table->string('harvest_quality');
            $table->text('production_factors')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('yields');
    }
};
