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
            $table->id('Tour_Id')->primary();
            $table->string('Name');
            $table->id('Tourist_Id')->foreign('Tourist_id')->references('Tourist_Id')->on('tourists');
            $table->id('Guide_Id')->foreign('Guide_id')->references('Guide_Id')->on('guides');
            $table->string('Status')->default('Pending'); //Pending, Approved, Rejected
            $table->id('Transportation_Id')->foreign('Transportation_Id')->references('Transportation_Id')->on('transportations');
            $table->integer('Number_of_Adults')->default(1);
            $table->integer('Number_of_kids')->nullable();
            $table->date('Date');
            $table->time('Start_Time');
            $table->time('End_Time');
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
