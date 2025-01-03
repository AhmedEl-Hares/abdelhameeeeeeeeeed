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
        Schema::create('guides', function (Blueprint $table) {
            $table->id()->primary();
            $table->string('Name');
            $table->string('Email')->unique();
            $table->string('Password');
            $table->string('Phone')->unique();
            $table->string('Address')->nullable();
            $table->string('Nationality');
            $table->string('License_Number')->unique();
            $table->json('Languages');
            $table->decimal('Fees', 12, 3);
            $table->string('payment_currency');
            $table->string('payment_method');
            $table->longText('Description');
            $table->boolean('VIP')->byDefault(false);
            $table->json('Available',date('d-m-Y'));
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('guides');
    }
};
