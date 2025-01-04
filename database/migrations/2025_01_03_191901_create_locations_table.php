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
        Schema::create('locations', function (Blueprint $table) {
            $table->id('Location_Id')->primary();
            $table->string('Name')->unique();
            $table->string('Address')->unique();
            $table->string('City');
            $table->string('Country');
            $table->time('Opening_Time');
            $table->time('Closing_Time');
            $table->decimal('Ticket_Price', 12, 3);
            $table->string('Type'); // Museum, Historical Site, Temple, Other ,,,, M,H,T,O
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
        Schema::dropIfExists('locations');
    }
};
