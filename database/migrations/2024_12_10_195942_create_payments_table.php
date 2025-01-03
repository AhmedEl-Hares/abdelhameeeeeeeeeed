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
            $table->id()->primary();
            $table->id('Tourist_id')->foreign('Tourist_id')->references('id')->on('tourists');
            $table->id('tour_id')->foreign('tour_id')->references('id')->on('tours');
            $table->decimal('Amount', 12, 3);
            $table->string('Payment_Method')->nullable();
            $table->string('Payment_Status'); // Pending, Paid, Refunded, voided
            $table->string('Payment_Currency');
            $table->dateTime('Date');
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
