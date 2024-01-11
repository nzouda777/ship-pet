<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Requests\OrderRequest;
use App\Models\Order;

class OrderController extends Controller
{
    //
    public function index(){
        return view('orders')->with('orders', Order::paginate(10));
    }
    public function store(OrderRequest $request) {
        $order = Order::create($request->validated()); 
    }
    public function show(Request $request, $order){
        return Order::whereId($order)->firstOrFail();
    }   
    public function edit(OrderRequest $r, $order){
        $up = $order->update($r->validated());
    } 
    public function destroy(Order $order){
        $order->delete();
    }
}
