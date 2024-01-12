<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\isAdmin;


return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('orders', function (Blueprint $table) {
            
            $table->id();
            $table->string("senderLocation");
            $table->string("senderFullname");
            $table->string("senderMail");
            $table->string("receiverFullName");
            $table->string("receiverLocation");
            $table->string("receiverPhone");
            $table->string("origin");
            $table->string("destination");
            $table->string("weight");
            $table->string("product");
            $table->string("totalFreight");
            $table->string("pickUpDate");
            $table->string("Comment")->nullable();
            $table->string("package");
            $table->string("carrier");
            $table->string("shipmentMode");
            $table->string("quantity");
            $table->string("expectedDeliveryDate");
            $table->string("pickUpTime");
            $table->string("status")->nullable();
            $table->string("shipmentType");
            $table->string("carrierRef");
            $table->string("paymentMode");
            $table->string("departureTime");
            $table->string("order_id")->nullable();
            $table->timestamps();
            
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('orders');
    }
};
