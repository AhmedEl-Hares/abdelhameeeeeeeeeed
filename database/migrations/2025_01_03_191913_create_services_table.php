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
        Schema::create('services', function (Blueprint $table) {
            $table->id()->primary();
            $table->string('Name');
            $table->string('Address');
            $table->string('City');
            $table->string('Country');
            $table->time('Opening_Time');
            $table->time('Closing_Time');
            $table->decimal('minimum_charge', 12, 3)->nullable();
            $table->string('Type'); // restaurant, cafes, others
            $table->longText('Description');
            $table->string('thumbnail')->unique();
            $table->json('videos');
            $table->json('images');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('services');
    }
};
