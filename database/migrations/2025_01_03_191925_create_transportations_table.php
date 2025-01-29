<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Symfony\Component\Mailer\Transport;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('transportations', function (Blueprint $table) {
            $table->id('Transportation_ID')->primary();
            $table->string('Driver_Name');
            $table->string('Personal_License_Number');
            $table->string('Driver_National_Id');
            $table->string('Driver_Phone');
            $table->string('Driver_Email')->nullable();
            $table->string('Type'); // Bus, Car, Minibus. B, C, M
            $table->integer('Car_Max_Capacity');
            $table->string('Car_License_Number');

            // Define foreign keys
            $table->foreign('Tour_id')->references('Tour_Id')->on('tours')->onDelete('cascade');
        });
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('transportations');
    }
};
