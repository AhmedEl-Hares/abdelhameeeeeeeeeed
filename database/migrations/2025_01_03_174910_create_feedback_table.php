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
        Schema::create('feedback', function (Blueprint $table) {
            $table->id('Feedback_Id')->primary();
            $table->id('Tour_id')->foreign('Tour_id')->references('Tour_Id')->on('tours');
            $table->id('Guide_id')->foreign('Guide_id')->references('Guide_Id')->on('guides');
            $table->decimal('Tour_Rating', 1, 1);
            $table->decimal('Guide_Rating', 1, 1);
            $table->longText('Tour_Comment');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('feedback');
    }
};
