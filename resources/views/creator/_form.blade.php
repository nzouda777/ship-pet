@extends('layouts.master', ['title' => 'Order'])
<style>
    .element{
        transition: display 1s;
    }
</style>
@section('content')
   
<div class="mt-8 w-full  px-4">
    <div class="w-full max-w-[1024px] mx-auto space-y-7">
        <h1 class="font-bold text-4xl">
            Update order - international Travel
        </h1>
        
        <form class="space-y-4 w-full" action="{{ route('update.order', $order->id )}}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="w-full flex gap-5">
                <div class="space-y-2 w-full">
                    <h2 class="font-semibold text-3xl capitalize">
                        Shipper informations 
                    </h2>
                    <div class="w-full py-4 px-4 space-y-5 ring-2 ring-gray-200 rounded-md">
                        <div class="flex gap-4 items-center w-full">
                            <div class="w-full">
                                <div class="space-y-1 ">
                                    <label for="Fullname">Fullname<b class="text-red-600 text-sm font-semibold">*</b>  </label>
                                    <div class="space-y-0.5">
                                        <input type="text" value="{{ $order->senderFullname}}"  name="senderFullname" class="border-none ring-1 py-1 outline-none rounded-sm w-full px-2 ring-gray-300 text-sm">
                                        @error('senderFullname')
                                        <div>
                                        <i class="text-red-500 text-xs mt-1">{{$message}}</i>
                                        </div>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="w-full">
                                <div class="space-y-1 ">
                                    <label for="location">Location<b class="text-red-600 text-sm font-semibold">*</b></label>
                                    <div class="space-y-0.5">
                                        <input type="text" value="{{ $order->senderLocation }}"  name="senderLocation" class="border-none ring-1 py-1 outline-none rounded-sm w-full px-2 ring-gray-300 text-sm">
                                        @error('senderLocation')
                                        <div>
                                        <i class="text-red-500 text-xs mt-1">{{$message}}</i>
                                        </div>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="w-full">
                            <div class="space-y-1 ">
                                <label for="Email">Email<b class="text-red-600 text-sm font-semibold">*</b></label>
                                <div class="space-y-0.5">
                                    <input type="text" value="{{ $order->senderMail }}"  name="senderMail" class="border-none ring-1 py-1 outline-none rounded-sm w-6/12 px-2 ring-gray-300 text-sm">
                                    @error('senderMail')
                                    <div>
                                    <i class="text-red-500 text-xs mt-1">{{$message}}</i>
                                    </div>
                                    @enderror
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="space-y-2 w-full">
                    <h2 class="font-semibold text-3xl capitalize">
                        Receiver informations
                    </h2>
                    <div class="w-full py-4 px-4 space-y-5 ring-2 ring-gray-200 rounded-md">
                        <div class="flex gap-4 items-center w-full">
                            <div class="w-full">
                                <div class="space-y-1 ">
                                    <label for="Fullname">Fullname<b class="text-red-600 text-sm font-semibold">*</b>  </label>
                                    <div class="space-y-0.5">
                                        <input type="text" value="{{ $order->receiverFullName }}"  name="receiverFullName" class="border-none ring-1 py-1 outline-none rounded-sm w-full px-2 ring-gray-300 text-sm">
                                        @error('receiverFullName')
                                        <div>
                                        <i class="text-red-500 text-xs mt-1">{{$message}}</i>
                                        </div>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="w-full">
                                <div class="space-y-1 ">
                                    <label for="location">Location<b class="text-red-600 text-sm font-semibold">*</b></label>
                                    <div class="space-y-0.5">
                                        <input type="text" value="{{ $order->receiverLocation }}"  name="receiverLocation" class="border-none ring-1 py-1 outline-none rounded-sm w-full px-2 ring-gray-300 text-sm">
                                        @error('receiverLocation')
                                        <div>
                                        <i class="text-red-500 text-xs mt-1">{{$message}}</i>
                                        </div>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="flex items-center w-full">
                            
                            <div class="w-full">
                                <div class="space-y-1 ">
                                    <label for="Phone">Phone<b class="text-red-600 text-sm font-semibold">*</b></label>
                                    <div class="space-y-0.5">
                                        <input type="text" value="{{ $order->receiverPhone }}"  name="receiverPhone" class="border-none ring-1 py-1 outline-none rounded-sm w-6/12 px-2 ring-gray-300 text-sm">
                                        @error('receiverPhone')
                                        <div>
                                        <i class="text-red-500 text-xs mt-1">{{$message}}</i>
                                        </div>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>

            <div class="space-y-2">
                <h2 class="font-semibold text-3xl capitalize">
                    Order informations
                </h2>
                <div class="w-full py-4 px-4 space-y-5 ring-2 ring-gray-200 rounded-md">
                    <div class="flex  items-center w-full">
                        <div class="w-full">
                            <div class="space-y-1 ">
                                <label for="origin">Origin<b class="text-red-600 text-sm font-semibold">*</b>  </label>
                                <div class="space-y-0.5">
                                    <input type="text" value="{{ $order->origin }}"  name="origin" class="border-none ring-1 py-1 outline-none rounded-sm w-10/12 px-2 ring-gray-300 text-sm">
                                    @error('origin')
                                    <div>
                                    <i class="text-red-500 text-xs mt-1">{{$message}}</i>
                                    </div>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="w-full">
                            <div class="space-y-1 ">
                                <label for="location">Destination<b class="text-red-600 text-sm font-semibold">*</b></label>
                                <div class="space-y-0.5">
                                    <input type="text" value="{{ $order->destination }}"  name="destination" class="border-none ring-1 py-1 outline-none rounded-sm w-10/12 px-2 ring-gray-300 text-sm">
                                    @error('destination')
                                    <div>
                                    <i class="text-red-500 text-xs mt-1">{{$message}}</i>
                                    </div>
                                    @enderror
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="flex  items-center w-full">
                        <div class="w-full">
                            <div class="space-y-1 ">
                                <label for="location">Product<b class="text-red-600 text-sm font-semibold">*</b></label>
                                <div class="space-y-0.5">
                                    <input type="text" value="{{ $order->product }}"  name="product" class="border-none ring-1 py-1 outline-none rounded-sm w-10/12 px-2 ring-gray-300 text-sm">
                                    @error('product')
                                    <div>
                                    <i class="text-red-500 text-xs mt-1">{{$message}}</i>
                                    </div>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="w-full">
                            <div class="space-y-1 ">
                                <label for="location">Quantity<b class="text-red-600 text-sm font-semibold">*</b></label>
                                <div class="space-y-0.5">
                                    <input type="text" value="{{ $order->quantity }}"  name="quantity" class="border-none ring-1 py-1 outline-none rounded-sm w-10/12 px-2 ring-gray-300 text-sm">
                                    @error('quantity')
                                    <div>
                                    <i class="text-red-500 text-xs mt-1">{{$message}}</i>
                                    </div>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="w-full">
                            <div class="space-y-1 ">
                                <label for="origin">Weight<b class="text-red-600 text-sm font-semibold">*</b>  </label>
                                <div class="space-y-0.5">
                                    <input type="text" value="{{ $order->weight }}"  name="weight" class="border-none ring-1 py-1 outline-none rounded-sm w-10/12 px-2 ring-gray-300 text-sm">
                                    @error('weight')
                                    <div>
                                    <i class="text-red-500 text-xs mt-1">{{$message}}</i>
                                    </div>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        
                        <div class="w-full">
                            <div class="space-y-1 ">
                                <label for="location">Total Freight<b class="text-red-600 text-sm font-semibold">*</b></label>
                                <div class="space-y-0.5">
                                    <input type="text" value="{{$order->totalFreight}}"  name="totalFreight" class="border-none ring-1 py-1 outline-none rounded-sm w-10/12 px-2 ring-gray-300 text-sm">
                                    @error('totalFreight')
                                    <div>
                                    <i class="text-red-500 text-xs mt-1">{{$message}}</i>
                                    </div>
                                    @enderror
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="flex  items-center w-full">
                        <div class="w-full">
                            <div class="space-y-1 ">
                                <label for="location">Departure Time<b class="text-red-600 text-sm font-semibold">*</b></label>
                                <div class="space-y-0.5">
                                    <input type="time" value="{{$order->departureTime}}"  name="departureTime" class="border-none ring-1 py-1 outline-none rounded-sm w-10/12 px-2 ring-gray-300 text-sm">
                                    @error('departureTime')
                                    <div>
                                    <i class="text-red-500 text-xs mt-1">{{$message}}</i>
                                    </div>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="w-full">
                            <div class="space-y-1 ">
                                <label for="location">Pick Up Date<b class="text-red-600 text-sm font-semibold">*</b></label>
                                <div class="space-y-0.5">
                                    <input type="date" value="{{ $order->pickUpDate }}"  name="pickUpDate" class="border-none ring-1 py-1 outline-none rounded-sm w-10/12 px-2 ring-gray-300 text-sm">
                                    @error('pickUpDate')
                                    <div>
                                    <i class="text-red-500 text-xs mt-1">{{$message}}</i>
                                    </div>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="w-full">
                            <div class="space-y-1 ">
                                <label for="origin">Pick Up Time<b class="text-red-600 text-sm font-semibold">*</b>  </label>
                                <div class="space-y-0.5">
                                    <input type="time" value="{{$order->pickUpTime}}"  name="pickUpTime" class="border-none ring-1 py-1 outline-none rounded-sm w-10/12 px-2 ring-gray-300 text-sm">
                                    @error('pickUpTime')
                                    <div>
                                    <i class="text-red-500 text-xs mt-1">{{$message}}</i>
                                    </div>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        
                        <div class="w-full">
                            <div class="space-y-1 ">
                                <label for="location">Expected Delivery Date<b class="text-red-600 text-sm font-semibold">*</b></label>
                                <div class="space-y-0.5">
                                    <input type="date" value="{{ $order->expectedDeliveryDate }}"  name="expectedDeliveryDate" class="border-none ring-1 py-1 outline-none rounded-sm w-10/12 px-2 ring-gray-300 text-sm">
                                    @error('expectedDeliveryDate')
                                    <div>
                                    <i class="text-red-500 text-xs mt-1">{{$message}}</i>
                                    </div>
                                    @enderror
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="flex  items-center w-full">
                        <div class="w-full">
                            <div class="space-y-1 ">
                                <label for="location">Package<b class="text-red-600 text-sm font-semibold">*</b></label>
                                <div class="space-y-0.5">
                                    <input type="text" value="{{ $order->package }}"  name="package" class="border-none ring-1 py-1 outline-none rounded-sm w-10/12 px-2 ring-gray-300 text-sm">
                                    @error('package')
                                    <div>
                                    <i class="text-red-500 text-xs mt-1">{{$message}}</i>
                                    </div>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="w-full">
                            <div class="space-y-1 ">
                                <label for="location">Carrier<b class="text-red-600 text-sm font-semibold">*</b></label>
                                <div class="space-y-0.5">
                                    <input type="text" value="{{ $order->carrier }}"  name="carrier" class="border-none ring-1 py-1 outline-none rounded-sm w-10/12 px-2 ring-gray-300 text-sm">
                                    @error('carrier')
                                    <div>
                                    <i class="text-red-500 text-xs mt-1">{{$message}}</i>
                                    </div>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="w-full">
                            <div class="space-y-1 ">
                                <label for="origin">Shipment Mode<b class="text-red-600 text-sm font-semibold">*</b>  </label>
                                <div class="space-y-0.5">
                                    <input type="text" value="{{$order->shipmentMode}}"  name="shipmentMode" class="border-none ring-1 py-1 outline-none rounded-sm w-10/12 px-2 ring-gray-300 text-sm">
                                    @error('shipmentMode')
                                    <div>
                                    <i class="text-red-500 text-xs mt-1">{{$message}}</i>
                                    </div>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        
                        <div class="w-full">
                            <div class="space-y-1 ">
                                <label for="location">Shipment Type<b class="text-red-600 text-sm font-semibold">*</b></label>
                                <div class="space-y-0.5">
                                    <input type="text" value="{{$order->shipmentType}}"  name="shipmentType" class="border-none ring-1 py-1 outline-none rounded-sm w-10/12 px-2 ring-gray-300 text-sm">
                                    @error('shipmentType')
                                    <div>
                                    <i class="text-red-500 text-xs mt-1">{{$message}}</i>
                                    </div>
                                    @enderror
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="flex  items-center w-full">
                        <div class="w-full">
                            <div class="space-y-1 ">
                                <label for="location">Carrier Reference<b class="text-red-600 text-sm font-semibold">*</b></label>
                                <div class="space-y-0.5">
                                    <input type="text" value="{{$order->carrierRef}}"  name="carrierRef" class="border-none ring-1 py-1 outline-none rounded-sm w-10/12 px-2 ring-gray-300 text-sm">
                                    @error('carrierRef')
                                    <div>
                                    <i class="text-red-500 text-xs mt-1">{{$message}}</i>
                                    </div>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="w-full">
                            <div class="space-y-1 ">
                                <label for="location">Payment Mode<b class="text-red-600 text-sm font-semibold">*</b></label>
                                <div class="space-y-0.5">
                                    <input type="text" value="{{ $order->paymentMode }}"  name="paymentMode" class="border-none ring-1 py-1 outline-none rounded-sm w-10/12 px-2 ring-gray-300 text-sm">
                                    @error('paymentMode')
                                    <div>
                                    <i class="text-red-500 text-xs mt-1">{{$message}}</i>
                                    </div>
                                    @enderror
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="flex w-full items-center justify-center">
                <input type="submit" value="Create order" class="bg-blue-400 py-3 px-4 inline-block">
            </div>
        </form>
    </div>
</div>

@endsection
@section('footer')
    Master &copy; 2022
@endsection

@push('scripts.footer')
    <script src="https://code.jquery.com/jquery.min.js"></script>
    
    @endpush
