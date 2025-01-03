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
            $table->id()->primary();
            $table->id('Tour_id')->foreign('Tour_id')->references('id')->on('tours');
            $table->id('Guide_id')->foreign('Guide_id')->references('id')->on('guides');
            $table->integer('Tour_Rating');
            $table->integer('Guide_Rating');
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
