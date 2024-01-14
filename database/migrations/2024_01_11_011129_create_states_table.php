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
        Schema::create('states', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger("orders_id")->nullable();
            $table->string("order_id");
            $table->string("order_confirmed")->nullable();
            $table->string("order_time")->nullable();
            $table->string("in_transit")->nullable();
            $table->string("in_trans_time")->nullable();
            $table->string("in_transit_latest")->nullable();
            $table->string("in_trans_lat_time")->nullable();
            $table->string("arrived")->nullable();
            $table->string("arrived_time")->nullable();
            $table->string("out_for_delivery")->nullable();
            $table->string("out_for_delivery_time")->nullable(); 
            $table->string("delivery")->nullable();
            $table->string("delivery_time")->nullable(); 
            $table->foreign('orders_id')->references('id')->on('orders')->onDelete('cascade');
           
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('states');
    }
};
