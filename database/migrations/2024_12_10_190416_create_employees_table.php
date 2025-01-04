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
        Schema::create('employees', function (Blueprint $table) {
            $table->id('Employee_Id')->primary();
            $table->string('Name');
            $table->string('Email')->unique();
            $table->string('Password');
            $table->string('Phone')->unique();
            $table->string('Address');
            $table->string('Nationality');
            $table->string('Department');
            $table->string('Position');
            $table->decimal('Salary', 12, 3);
            $table->string('Payment_Currency');
            $table->date('Hiring_Date');
            $table->date('Birth_Date');
            $table->integer('Age');
            $table->integer('Working_Hours');
            $table->integer('Vacation_Days');
            $table->string('Description');
            $table->boolean('Admin')->default(false);
            $table->boolean('SuperAdmin')->default(false);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('employees');
    }
};
