<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;

class TrackingController extends Controller
{
    //
    public function index(){
        return view('pages.trackForm');
    }
    public function trackOrder(Request $request,Order $orderId){
        // dd($request);
        $track = Order::whereOrderId($request->orderId)->firstOrFail();
        return view('pages.trackForm', compact('track'));
    }
    
}
