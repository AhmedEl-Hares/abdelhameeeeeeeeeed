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
        Schema::create('tours', function (Blueprint $table) {
            $table->id()->primary();
            $table->string('Name');
            $table->id('Tourist_id')->foreign('Tourist_id')->references('id')->on('tourists');
            $table->id('Guide_id')->foreign('Guide_id')->references('id')->on('guides');
            $table->string('status')->byDefault('Pending'); //Pending, Approved, Rejected
            $table->string('transportation');
            $table->integer('Number_of_Adults')->byDefault(1);
            $table->integer('Number_of_kids')->nullable();
            $table->date('Date');
            $table->string('Start_Time');
            $table->string('End_Time');
            $table->json('Locations');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tours');
    }
};
