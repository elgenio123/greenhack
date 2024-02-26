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
        Schema::create('agronomic_advices', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('plot_id');
            $table->foreign('plot_id')->references('id_plots')->on('plots');
            $table->date('advice_date');
            $table->text('advice_description');
            $table->timestamps();
     
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('agronomic_advices');
    }
};
