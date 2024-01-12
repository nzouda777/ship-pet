<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\isAdmin;
use App\Models\State;


class Order extends Model
{
    use HasFactory;
     protected $fillable = [
        'senderFullname',
        'senderLocation',
        "senderMail",
        "receiverFullName",
        "receiverLocation",
        "receiverPhone",
        "origin",
        "destination",
        "weight",
        "product",
        "totalFreight",
        "pickUpDate",
        "Comment",
        "package",
        "carrier",
        "shipmentMode",
        "quantity",
        "expectedDeliveryDate",
        "pickUpTime",
        "status",
        "shipmentType",
        "carrierRef",
        "paymentMode",
        "departureTime",
        "order_id"
    ];
    public function isAdmin()
    {
        return $this->belongsTo(isAdmin::class);
    }
    public function state()
    {
        return $this->hasMany(State::class);
    }
}
