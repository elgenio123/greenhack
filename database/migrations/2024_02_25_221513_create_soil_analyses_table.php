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
        Schema::create('soil_analyses', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('plot_id');
            $table->foreign('plot_id')->references('id_plots')->on('plots');
            $table->date('analysis_date');
            $table->float('ph_level');
            $table->float('organic_matter_content');
            $table->text('nutrient_levels'); // Vous pouvez stocker les niveaux de nutriments sous forme de texte
            $table->string('soil_texture');
            $table->float('arable_layer_depth');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('soil_analyses');
    }
};
