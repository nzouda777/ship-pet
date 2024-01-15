@extends('layouts.master', ['title' => 'Status form'])
<style>
    .element{
        transition: display 1s;
    }
</style>
@section('content')

<div class="mt-8 w-full  px-4">
    <div class="w-full max-w-[1024px] mx-auto space-y-7">
        <h1 class="font-bold text-4xl">
            Set order status - Pet Express
        </h1>
        
        <form class="space-y-4 w-full" action="{{ route('state.set', $status->order_id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="space-y-2">
                <h2 class="font-semibold text-3xl capitalize">
                    Status informations
                </h2>

                <h3 class="text-xl medium">Order No: {{ $status->order_id }}</h3>
                <div class="w-full py-4 px-4 space-y-5 ring-2 ring-gray-200 rounded-md">
                    
                    <div class="flex  items-center w-full">
                        <div class="w-full">
                            <div class="space-y-1 ">
                                <label for="location capitalize">Order confirmed date</label>
                                <div class="space-y-0.5">
                                    <input type="date" value="{{ $status->order_confirmed ?? old('order_confirmed')}}"  name="order_confirmed" class="ring-1 py-1 outline-none rounded-sm w-10/12 px-2 border-none ring-gray-300 text-sm">
                                    @error('order_confirmed')
                                    <div>
                                    <i class="text-red-500 text-xs mt-1">{{$message}}</i>
                                    </div>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="w-full">
                            <div class="space-y-1 ">
                                <label for="location capitalize">Order time</label>
                                <div class="space-y-0.5">
                                    <input type="time" value="{{ $status->order_time ?? old('order_time')}}"  name="order_time" class="ring-1 py-1 outline-none rounded-sm w-10/12 px-2 border-none ring-gray-300 text-sm">
                                    @error('order_time')
                                    <div>
                                    <i class="text-red-500 text-xs mt-1">{{$message}}</i>
                                    </div>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="w-full">
                            <div class="space-y-1 ">
                                <label for="origin" class="capitalize"> In transit Date 1  </label>
                                <div class="space-y-0.5">
                                    <input type="date" value="{{ $status->in_transit ?? old('in_transit')}}"  name="in_transit" class="ring-1 py-1 outline-none rounded-sm w-10/12 px-2 border-none ring-gray-300 text-sm">
                                    @error('in_transit')
                                    <div>
                                    <i class="text-red-500 text-xs mt-1">{{$message}}</i>
                                    </div>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        
                        <div class="w-full">
                            <div class="space-y-1 ">
                                <label for="location capitalize">In transit Time 1</label>
                                <div class="space-y-0.5">
                                    <input type="time" value="{{ $status->in_trans_time ?? old('in_trans_time')}}"  name="in_trans_time" class="ring-1 py-1 outline-none rounded-sm w-10/12 px-2 border-none ring-gray-300 text-sm">
                                    @error('in_trans_time')
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
                                <label for="location capitalize">in Transit date 2</label>
                                <div class="space-y-0.5">
                                    <input type="date" value="{{$status->in_transit_latest ?? old('in_transit_latest')}}"  name="in_transit_latest" class="ring-1 py-1 outline-none rounded-sm w-10/12 px-2 border-none ring-gray-300 text-sm">
                                    @error('in_transit_latest')
                                    <div>
                                    <i class="text-red-500 text-xs mt-1">{{$message}}</i>
                                    </div>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="w-full">
                            <div class="space-y-1 ">
                                <label for="location capitalize">in Transit time 2</label>
                                <div class="space-y-0.5">
                                    <input type="time" value="{{$status->in_trans_lat_time ?? old('in_trans_lat_time')}}"  name="in_trans_lat_time" class="ring-1 py-1 outline-none rounded-sm w-10/12 px-2 border-none ring-gray-300 text-sm">
                                    @error('in_trans_lat_time')
                                    <div>
                                    <i class="text-red-500 text-xs mt-1">{{$message}}</i>
                                    </div>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="w-full">
                            <div class="space-y-1 ">
                                <label for="origin capitalize"> Arrived  date</label>
                                <div class="space-y-0.5">
                                    <input type="date" value="{{$status->arrived ?? old('arrived')}}"  name="arrived" class="ring-1 py-1 outline-none rounded-sm w-10/12 px-2 border-none ring-gray-300 text-sm">
                                    @error('arrived')
                                    <div>
                                    <i class="text-red-500 text-xs mt-1">{{$message}}</i>
                                    </div>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        
                        <div class="w-full">
                            <div class="space-y-1 ">
                                <label for="location capitalize">arrived time</label>
                                <div class="space-y-0.5">
                                    <input type="time" value="{{$status->arrived_time ?? old('arrived_time')}}"  name="arrived_time" class="ring-1 py-1 outline-none rounded-sm w-10/12 px-2 border-none ring-gray-300 text-sm">
                                    @error('arrived_time')
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
                                <label for="location capitalize">out for delivery date</label>
                                <div class="space-y-0.5">
                                    <input type="date" value="{{ $status->out_for_delivery ??old('out_for_delivery')}}"  name="out_for_delivery" class="ring-1 py-1 outline-none rounded-sm w-10/12 px-2 border-none ring-gray-300 text-sm">
                                    @error('out_for_delivery')
                                    <div>
                                    <i class="text-red-500 text-xs mt-1">{{$message}}</i>
                                    </div>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="w-full">
                            <div class="space-y-1 ">
                                <label for="location capitalize">out for delivery time</label>
                                <div class="space-y-0.5">
                                    <input type="time" value="{{$status->out_for_delivery_time ?? old('out_for_delivery_time')}}"  name="out_for_delivery_time" class="ring-1 py-1 outline-none rounded-sm w-10/12 px-2 border-none ring-gray-300 text-sm">
                                    @error('out_for_delivery_time')
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
                                <label for="location capitalize">delivery date</label>
                                <div class="space-y-0.5">
                                    <input type="date" value="{{ $status->delivery ??old('delivery')}}"  name="delivery" class="ring-1 py-1 outline-none rounded-sm w-10/12 px-2 border-none ring-gray-300 text-sm">
                                    @error('delivery')
                                    <div>
                                    <i class="text-red-500 text-xs mt-1">{{$message}}</i>
                                    </div>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="w-full">
                            <div class="space-y-1 ">
                                <label for="location capitalize">delivery time</label>
                                <div class="space-y-0.5">
                                    <input type="time" value="{{$status->delivery_time ?? old('delivery_time')}}"  name="delivery_time" class="ring-1 py-1 outline-none rounded-sm w-10/12 px-2 border-none ring-gray-300 text-sm">
                                    @error('delivery_time')
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
                <input type="submit" value="Create order" class="bg-primary py-3 text-white w-full cursor-pointer px-4 inline-block">
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
