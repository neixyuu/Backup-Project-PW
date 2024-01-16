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
        Schema::create('cars', function (Blueprint $table) {
            $table->uuid('id');
            $table->primary('id');
            $table->string('name', 50);
            $table->string('horsepower', 5);
            $table->string('gasoline', 10);
            $table->char('year', 4);
            $table->string('odometer', 15);
            $table->string('cylinder', 10);
            $table->string('transmission', 20);
            $table->string('price', 40);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cars');
    }
};
