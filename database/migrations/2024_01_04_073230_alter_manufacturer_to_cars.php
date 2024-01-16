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
        Schema::table('cars', function (Blueprint $table) {
            $table->uuid('manufactures_id');
            $table->foreign('manufactures_id')->references('id')->on('manufactures')->restrictOnDelete()->restrictOnUpdate();
            $table->uuid('typemodels_id');
            $table->foreign('typemodels_id')->references('id')->on('typemodel')->restrictOnDelete()->restrictOnUpdate();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('cars', function (Blueprint $table) {
            //
        });
    }
};
