<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;
use App\Models\State;

class TrackingController extends Controller
{
    //
    public function index(){
        return view('pages.trackForm');
    }
    public function trackOrder(Request $request,Order $orderId){
        // dd($orderId);
        $track = Order::whereOrderId($request->orderId)->firstOrFail();
        $status = State::whereOrderId($request->orderId)->firstOrFail();
        if (!empty($track)) {
            # code...
            return view('pages.trackForm', compact('track', 'status'));
        } else {
            # code...
            return redirect("/tracking");
        }
        
        
    }
    public function formState($id) {
        $status = State::whereOrderId($id)->firstOrFail();
        return view('creator.formStatus', compact('status'));
    }
    public function setState(Request $request, $status) {
        // dd($status);
        $order = State::whereOrderId($status)->firstOrFail();
        $state = $order->update([
            "order_confirmed" => $request->order_confirmed,
            "order_time" => $request->order_time ,
            "in_transit" => $request->in_transit ,
            "in_trans_time" => $request->in_trans_time ,
            "in_transit_latest" => $request->in_transit_latest ,
            "in_trans_lat_time" => $request->in_trans_lat_time ,
            "arrived" => $request->arrived ,
            "arrived_time" => $request->arrived_time ,
            "out_for_delivery" => $request->out_for_delivery ,
            "out_for_delivery_time" => $request->out_for_delivery_time,  
            "delivery" => $request->delivery,
            "delivery_time" => $request->delivery_time
        ]);
    //    dd($state);
        // $state->save();
       return  redirect('/admin/order/view');
    }
    
}
