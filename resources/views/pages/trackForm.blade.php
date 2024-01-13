@extends('layouts.master', ['title' => 'Team'])
<style>
    .element{
        transition: height 1s;
    }
</style>
@section('content')
    <section class="relative w-full">
        <div class="w-full">
            <div class="w-full max-w-[1200px] mx-auto px-4 space-y-12 h-full flex items-center justify-center">
                <div class="w-full ">
                    
                    <form action="{{ route('track.order')}}" method="POST" enctype="multipart/form-data">   
                        @csrf
                        <label for="default-search" class="mb-2 text-sm font-medium text-gray-900 sr-only dark:text-white">Search</label>
                        <div class="relative overflow-hidden rounded-lg">
                            <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
                                <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z"/>
                                </svg>
                            </div>
                            <input type="search" id="default-search" name="orderId" class="block w-full p-4 ps-10 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Enter order ID" required>
                            <button type="submit" class="text-white absolute end-0 bottom-0 bg-primary hover:bg-second ring-1 ring-primary focus:outline-none font-medium  inline-block text-sm px-8 py-4 ">Track</button>
                        </div>
                    </form>
                    @isset ($track)
                    <div class="grid md:grid-cols-2 grid-cols-1 shadow-md rounded-md">
                        <div></div>
                        <div>
                            <div style="max-width:100%;overflow:hidden;color:red;width:500px;height:500px;"><div id="embed-map-display" style="height:100%; width:100%;max-width:100%;"><iframe style="height:100%;width:100%;border:0;" frameborder="0" src="https://www.google.com/maps/embed/v1/directions?origin={{$track->origin}}&destination={{$track->destination}}&key=AIzaSyBFw0Qbyq9zTFTd-tUY6dZWTgaQzuU17R8"></iframe></div><a class="googlecoder" href="https://www.bootstrapskins.com/themes" id="get-data-for-embed-map">premium bootstrap themes</a><style>#embed-map-display img.text-marker{max-width:none!important;background:none!important;}img{max-width:none}</style></div>
                        </div>
                    </div>
                    <div class="md:flex justify-between mt-16 space-y-4">
                        <div class="md:w-3/12 ">
                            <div class="space-y-14">
                                <div class="w-fit">
                                    <h3 class="text-xl font-semibold">
                                        Receiver information
                                    </h3>
                                    <div class="space-y-6 mt-5">
                                        <div class="space-y-1">
                                            <p class="text-sm text-gray-500 "></p>
                                            <h3 class="text-lg ml-1 font-medium">
                                                {{ $track->receiverFullName }}
                                            </h3>
                                            <p class="text-sm ml-1 text-gray-700 ">
                                                {{ $track->receiverPhone }}
                                            </p>
                                        </div>
                                        <div class="space-y-1">
                                            <h4 class="text-md">Location</h4>
                                            <p class="text-sm text-gray-500 ">{{ $track->receiverLocation}}</p> 
                                        </div>
                                    </div>
                                </div>
                                <div class="w-fit">
                                    <h3 class="text-xl font-semibold">
                                        Sender information
                                    </h3>
                                    <div class="space-y-6 mt-5">
                                        <div class="space-y-1">
                                            <p class="text-sm text-gray-500 "></p>
                                            <h3 class="text-lg ml-1 font-medium">
                                                {{ $track->senderFullname }}
                                            </h3>
                                            <p class="text-sm ml-1 text-gray-700 ">
                                                {{ $track->senderMail}}
                                            </p>
                                        </div>
                                        <div class="space-y-1">
                                            <h4 class="text-md">Location</h4>
                                            <p class="text-sm text-gray-500 ">
                                                {{ $track->senderLocation }}
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <div class="md:w-9/12">
                            <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
                                
                                <h2 class="py-2 px-4 bg-gray-700 text-gray-100 font-bold uppercase">Shipment information</h2>
                                <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                                    <thead class="text-xs text-gray-100 uppercase bg-gray-700 dark:text-gray-400">
                                        <tr>
                                            <th scope="col" class="px-6 py-3">
                                                order id
                                            </th>
                                            <th scope="col" class="px-6 py-3">
                                                Product
                                            </th>
                                            <th scope="col" class="px-6 py-3">
                                                Weight
                                            </th>
                                            <th scope="col" class="px-6 py-3">
                                                origin
                                            </th>
                                            <th scope="col" class="px-6 py-3">
                                                destination
                                            </th>
                                            <th scope="col" class="px-6 py-3">
                                                quantity
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                                            <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                                {{ $track->order_id  }}
                                            </th>
                                            <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                                {{ $track->product }}
                                            </th>
                                            <td class="px-6 py-4">
                                                {{ $track->weight }}
                                            </td>
                                            <td class="px-6 py-4">
                                                {{ $track->origin }}
                                            </td>
                                            <td class="px-6 py-4">
                                                {{ $track->destination }}
                                            </td>
                                            <td class="px-6 py-4">
                                               {{ $track->quantity }}
                                            </td>
                                        </tr>
                                        
                                    </tbody>
                                </table>
                                <table class="w-full text-sm text-left rtl:text-right text-gray-500 mt-5 dark:text-gray-400">
                                    <thead class="text-xs text-gray-100 uppercase bg-gray-700 dark:text-gray-400">
                                        <tr>
                                            <th scope="col" class="px-6 py-3">
                                                carrier ref
                                            </th>
                                            <th scope="col" class="px-6 py-3">
                                                carrier
                                            </th>
                                            <th scope="col" class="px-6 py-3">
                                                package 
                                            </th>
                                            <th scope="col" class="px-6 py-3">
                                                total freight
                                            </th>
                                            <th scope="col" class="px-6 py-3">
                                                shipment mode
                                            </th>
                                            <th scope="col" class="px-6 py-3">
                                                shipment type
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                                            <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                                {{ $track->carrierRef }}
                                            </th>
                                            <td class="px-6 py-4">
                                                {{$track->carrier}}
                                            </td>
                                            <td class="px-6 py-4">
                                                {{ $track->package}}
                                            </td>
                                            <td class="px-6 py-4">
                                                {{ $track->totalFreight }}
                                            </td>
                                            <td class="px-6 py-4">
                                               {{ $track->shipmentMode }}
                                            </td>
                                            <td class="px-6 py-4">
                                               {{ $track->shipmentType }}
                                            </td>
                                        </tr>
                                        
                                    </tbody>
                                </table>
                                <table class="w-full text-sm text-left rtl:text-right text-gray-500 mt-5 dark:text-gray-400">
                                    <thead class="text-xs text-gray-100 uppercase bg-gray-700 dark:text-gray-400">
                                        <tr>
                                            <th scope="col" class="px-6 py-3">
                                                pick up date
                                            </th>
                                            <th scope="col" class="px-6 py-3">
                                                pick up time
                                            </th>
                                            <th scope="col" class="px-6 py-3">
                                                departure time 
                                            </th>
                                            <th scope="col" class="px-6 py-3">
                                                expected delivery
                                            </th>
                                            <th scope="col" class="px-6 py-3">
                                                payment mode
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                                            <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                                {{ $track->pickUpDate }}
                                            </th>
                                            <td class="px-6 py-4">
                                                {{ $track->pickUpTime }}
                                            </td>
                                            <td class="px-6 py-4">
                                                {{ $track->departureTime }}
                                            </td>
                                            <td class="px-6 py-4">
                                                {{ $track->expectedDeliveryDate }}
                                            </td>
                                            <td class="px-6 py-4">
                                               {{ $track->paymentMode }}
                                            </td>
                                        </tr>
                                        
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    @endisset
                       
                </div> 
            </div>
        </div>
    </section>
@endsection
@section('footer')

@endsection

@push('scripts.footer')
    <script src="https://code.jquery.com/jquery.min.js"></script>
<script>

</script>

    @endpush
