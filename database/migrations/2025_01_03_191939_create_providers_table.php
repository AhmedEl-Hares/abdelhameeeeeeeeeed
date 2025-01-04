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
        Schema::create('providers', function (Blueprint $table) {
            $table->id('Provider_Id'); 
            $table->string('Name');
            $table->string('Email')->unique();
            $table->string('Password');
            $table->string('Type_Of_Services');
            $table->longText('Description');
            $table->string('Phone_number')->unique();
            $table->string('Address'); 
            $table->string('City'); 
            $table->string('Country'); 
            $table->string('License_Number')->unique();
            $table->decimal('Cost_Per_Person', 12, 3);
            $table->string('Payment_currency');
            $table->decimal('Commission', 1, 3);
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
        Schema::dropIfExists('providers');
    }
};
