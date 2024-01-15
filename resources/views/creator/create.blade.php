@extends('layouts.master', ['title' => 'Create order'])
<style>
    .element{
        transition: display 1s;
    }
</style>
@section('content')

<div class="mt-8 w-full  px-4">
    <div class="w-full max-w-[1024px] mx-auto space-y-7">
        <h1 class="font-bold text-4xl">
            Create order - Pet Express
        </h1>
        
        <form class="space-y-4 w-full" action="{{ route('store.order') }}" method="POST" enctype="multipart/form-data">
            @csrf
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
                                        <input type="text" value="{{old('senderFullname')}}"  name="senderFullname" class="ring-1 py-1 outline-none rounded-sm border-none w-full px-2 ring-gray-300 text-sm">
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
                                        <input type="text" value="{{old('senderLocation')}}"  name="senderLocation" class="ring-1 py-1 outline-none rounded-sm border-none w-full px-2 ring-gray-300 text-sm">
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
                                    <input type="text" value="{{old('senderMail')}}"  name="senderMail" class="ring-1 py-1 outline-none rounded-sm border-none w-6/12 px-2 ring-gray-300 text-sm">
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
                                        <input type="text" value="{{old('receiverFullName')}}"  name="receiverFullName" class="ring-1 py-1 outline-none rounded-sm border-none w-full px-2 ring-gray-300 text-sm">
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
                                        <input type="text" value="{{old('receiverLocation')}}"  name="receiverLocation" class="ring-1 py-1 outline-none rounded-sm border-none w-full px-2 ring-gray-300 text-sm">
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
                                        <input type="text" value="{{old('receiverPhone')}}"  name="receiverPhone" class="ring-1 py-1 outline-none rounded-sm border-none w-6/12 px-2 ring-gray-300 text-sm">
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
                                    <input type="text" value="{{old('origin')}}"  name="origin" class="ring-1 py-1 outline-none rounded-sm border-none w-10/12 px-2 ring-gray-300 text-sm">
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
                                    <input type="text" value="{{old('destination')}}"  name="destination" class="ring-1 py-1 outline-none rounded-sm border-none w-10/12 px-2 ring-gray-300 text-sm">
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
                                    <input type="text" value="{{old('product')}}"  name="product" class="ring-1 py-1 outline-none rounded-sm border-none w-10/12 px-2 ring-gray-300 text-sm">
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
                                    <input type="text" value="{{old('quantity')}}"  name="quantity" class="ring-1 py-1 outline-none rounded-sm border-none w-10/12 px-2 ring-gray-300 text-sm">
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
                                    <input type="text" value="{{old('weight')}}"  name="weight" class="ring-1 py-1 outline-none rounded-sm border-none w-10/12 px-2 ring-gray-300 text-sm">
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
                                    <input type="text" value="{{old('totalFreight')}}"  name="totalFreight" class="ring-1 py-1 outline-none rounded-sm border-none w-10/12 px-2 ring-gray-300 text-sm">
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
                                    <input type="time" value="{{old('departureTime')}}"  name="departureTime" class="ring-1 py-1 outline-none rounded-sm border-none w-10/12 px-2 ring-gray-300 text-sm">
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
                                    <input type="date" value="{{old('pickUpDate')}}"  name="pickUpDate" class="ring-1 py-1 outline-none rounded-sm border-none w-10/12 px-2 ring-gray-300 text-sm">
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
                                    <input type="time" value="{{old('pickUpTime')}}"  name="pickUpTime" class="ring-1 py-1 outline-none rounded-sm border-none w-10/12 px-2 ring-gray-300 text-sm">
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
                                    <input type="date" value="{{old('expectedDeliveryDate')}}"  name="expectedDeliveryDate" class="ring-1 py-1 outline-none rounded-sm border-none w-10/12 px-2 ring-gray-300 text-sm">
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
                                    <input type="text" value="{{old('package')}}"  name="package" class="ring-1 py-1 outline-none rounded-sm border-none w-10/12 px-2 ring-gray-300 text-sm">
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
                                    <input type="text" value="{{old('carrier')}}"  name="carrier" class="ring-1 py-1 outline-none rounded-sm border-none w-10/12 px-2 ring-gray-300 text-sm">
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
                                    <input type="text" value="{{old('shipmentMode')}}"  name="shipmentMode" class="ring-1 py-1 outline-none rounded-sm border-none w-10/12 px-2 ring-gray-300 text-sm">
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
                                    <input type="text" value="{{old('shipmentType')}}"  name="shipmentType" class="ring-1 py-1 outline-none rounded-sm border-none w-10/12 px-2 ring-gray-300 text-sm">
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
                                    <input type="text" value="{{old('carrierRef')}}"  name="carrierRef" class="ring-1 py-1 outline-none rounded-sm border-none w-10/12 px-2 ring-gray-300 text-sm">
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
                                    <input type="text" value="{{old('paymentMode')}}"  name="paymentMode" class="ring-1 py-1 outline-none rounded-sm border-none w-10/12 px-2 ring-gray-300 text-sm">
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
                <input type="submit" value="Create order" class="bg-primary py-3 text-white w-full cursor-pointer py-4 inline-block">
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
    <script>
    </script>
    @endpush
