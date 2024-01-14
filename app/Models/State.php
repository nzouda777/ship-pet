<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Order;


class State extends Model
{
    use HasFactory;
    protected $fillable = [
        "orders_id",
        "order_id",
        "order_confirmed",
        "order_time",
        "in_transit",
        "in_trans_time",
        "in_transit_latest",
        "in_trans_lat_time",
        "arrived",
        "arrived_time",
        "out_for_delivery",
        "out_for_delivery_time",
        "delivery",
        "delivery_time"
    ];
    public function order ()
    {
        return $this->belongsTo(Order::class);
    }
}
