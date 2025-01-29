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
        Schema::create('payments', function (Blueprint $table) {
            $table->id('Payment_Id')->primary();
            $table->decimal('Amount', 12, 3);
            $table->string('Payment_Method');
            $table->string('Payment_Status'); // Pending, Paid, Refunded, voided
            $table->string('Payment_Currency');
            $table->unsignedBigInteger('Tourist_Id');
            $table->unsignedBigInteger('Tour_Id');
            $table->dateTime('Date');

             // Define foreign keys
            $table->foreign('Tourist_Id')->references('Tourist_Id')->on('tourists')->onDelete('cascade');
            $table->foreign('Tour_Id')->references('Tour_Id')->on('tours')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('payments');
    }
};
