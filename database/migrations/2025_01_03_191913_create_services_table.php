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
            $table->id('Service_Id')->primary();
            $table->string('Name');
            $table->string('Username')->unique();
            $table->string('password');
            $table->string('Type'); // restaurant, cafes, others R, C, O
            $table->string('Address');
            $table->string('City');
            $table->string('Country');
            $table->time('Opening_Time');
            $table->time('Closing_Time');
            $table->decimal('Minimum_Charge', 12, 3)->nullable();
            $table->decimal('Commission', 1, 3);
            $table->longText('Description');
            $table->decimal('Average_Rating', 1, 1);
            $table->json('Available_Dates');
            $table->string('Thumbnail')->unique();
            $table->json('Videos');
            $table->json('Images');
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
