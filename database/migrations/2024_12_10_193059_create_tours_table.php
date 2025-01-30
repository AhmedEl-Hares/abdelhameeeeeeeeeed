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
            $table->string('Name')->required();
            $table->string('Status')->default('Pending'); //Pending, Approved, Rejected
            $table->integer('Number_of_Adults')->default(1);
            $table->integer('Number_of_kids')->nullable();
            $table->unsignedBigInteger('Tourist_Id')->required();
            $table->unsignedBigInteger('Guide_Id')->nullable();
            $table->unsignedBigInteger('Transportation_Id')->nullable();
            $table->date('Date');
            $table->time('Start_Time');
            $table->time('End_Time');
            $table->json('Locations')->nullable();

            // Define foreign keys
            $table->foreign('Tourist_Id')->references('Tourist_Id')->on('tourists')->onDelete('cascade');
            $table->foreign('Guide_Id')->references('Guide_Id')->on('guides')->onDelete('cascade');
            $table->foreign('Transportation_Id')->references('Transportation_ID')->on('transportations')->onDelete('cascade');
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
