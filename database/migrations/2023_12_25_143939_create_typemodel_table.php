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
        Schema::create('typemodel', function (Blueprint $table) {
            $table->uuid('id');
            $table->primary('id');
            $table->string('model',10);
            // $table->uuid('manufacture_id');
            // $table->foreign('manufacture_id')->references('id')->on
            // ('manufacture')->restrictOnDelete()->restrictOnUpdate();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('typemodel');
    }
};
