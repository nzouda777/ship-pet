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
        Schema::create('travel_details', function (Blueprint $table) {
            $table->id();
            $table->string("previsionalDate");
            $table->string("origin");
            $table->string("origin_airport");
            $table->string("destination");
            $table->string("destination_airport");
            $table->string("comments");
            $table->string("allowTextMessage");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('travel_details');
    }
};
