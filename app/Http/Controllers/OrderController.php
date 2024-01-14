<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\OrderRequest;
use Illuminate\Validation\Rule;
use App\Models\Order;
use App\Models\State;


class OrderController extends Controller
{
    //
    public function myForm()
    {
        
        return view('creator.create');
    }
    public function index(){
        $orders = Order::paginate(10)->sortBy('ASC');
        return view('creator.lists', compact('orders'));
    }

//     public function index(){
//         $orders = Order::paginate(10);
//         return view('creator.lists')->with(compact('orders'));
//     }

    public function store(Request $request) {
        
       $order = $request->validate([
        "senderLocation" => 'required',
        "senderFullname" => 'required',
            "senderMail" => ['required', 'email'],
            "receiverFullName" => ['required', "string"],
            "receiverLocation" => ['required'],
            "receiverPhone" => ['required'],
            "origin" => ['required'],
            "destination" => 'required',
            "weight" => 'required',
            "quantity" => 'required',
            "product" => 'required',
            "totalFreight" => 'required',
            "departureTime" => 'required',
            "pickUpDate" => 'required',
            "pickUpTime" => 'required',
            "expectedDeliveryDate" => 'required',
            "package" => 'required',
            "carrier" => 'required',
            "shipmentMode" => 'required',
            "shipmentType" => 'required',
            "carrierRef" => 'required',
            "paymentMode" => 'required'
        ]);
        $order_id = rand()."-PetExpress";
        $order['order_id'] = $order_id;
        // dd($order);
         Order::create($order);
        
         $state = State::forceCreate([
            "order_id" => $order_id,
            "order_confirmed" => "",
            "order_time" => "" ,
            "in_transit" => "" ,
            "in_trans_time" => "" ,
            "in_transit_latest" => "" ,
            "in_trans_lat_time" => "" ,
            "arrived" => "" ,
            "arrived_time" => "" ,
            "out_for_delivery" => "" ,
            "out_for_delivery_time" => "",  
            "delivery" => "",
            "delivery_time" => ""
         ]);
        return redirect('/admin/order/view');
    }

    public function show(Request $request, $order){
        return Order::whereId($order)->firstOrFail();
    }  
    
    public function editForm($id){
        $order = Order::whereId($id)->firstOrFail();
        return view('creator._form', compact('order'));
    }
    public function edit(OrderRequest $r,Order $order){
        $up = $order->update($r->validated());
    } 
    public function destroy(Order $order){
        $order->delete();
    }
}
