@extends('layouts.master', ['title' => 'Tracking'])
<style>
    .element{
        transition: height 1s;
    }
</style>
@section('content')
    <section class="relative w-full md:mt-0">
        <div class="w-full relative">
            <div class="w-full relative max-w-[1200px] mx-auto px-4 space-y-12 mt-16  flex items-center justify-center">
                <div class="w-full relative mt-14">
                    
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
                    
                    <div class="grid md:grid-cols-2 grid-cols-1 mt-24 md:mt-0 shadow-md rounded-md">
                        <div class="relative">
                            {{$status->in_transit_latest}}
                                <div class="tracking-item
                                @if (!empty($status->order_confirmed))
                                tracking-complete
                              @else
                                  tracking-pending
                              @endif
                                ">
                                  <div class="tracking-icon  @if (!empty($status->order_confirmed))
                                    status-complete
                                  @else
                                      status-pending
                                  @endif
                                  
                                  @if (!empty($status->order_confirmed) && empty($status->in_transit) )
                                  
                                      status-active
                                  @endif
                                  ">
                                    <i class=" flex items-center justify-center h-full">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M6.633 10.25c.806 0 1.533-.446 2.031-1.08a9.041 9.041 0 0 1 2.861-2.4c.723-.384 1.35-.956 1.653-1.715a4.498 4.498 0 0 0 .322-1.672V2.75a.75.75 0 0 1 .75-.75 2.25 2.25 0 0 1 2.25 2.25c0 1.152-.26 2.243-.723 3.218-.266.558.107 1.282.725 1.282m0 0h3.126c1.026 0 1.945.694 2.054 1.715.045.422.068.85.068 1.285a11.95 11.95 0 0 1-2.649 7.521c-.388.482-.987.729-1.605.729H13.48c-.483 0-.964-.078-1.423-.23l-3.114-1.04a4.501 4.501 0 0 0-1.423-.23H5.904m10.598-9.75H14.25M5.904 18.5c.083.205.173.405.27.602.197.4-.078.898-.523.898h-.908c-.889 0-1.713-.518-1.972-1.368a12 12 0 0 1-.521-3.507c0-1.553.295-3.036.831-4.398C3.387 9.953 4.167 9.5 5 9.5h1.053c.472 0 .745.556.5.96a8.958 8.958 0 0 0-1.302 4.665c0 1.194.232 2.333.654 3.375Z" />
                                          </svg>                      
                                    </i>
                                  </div>
                                  <div class="tracking-date">{{$status->order_confirmed ?? '--'}}<span>{{ $status->order_time ?? '--'}}</span></div>
                                  <div class="tracking-content">Order Confirmed<span>Seller Confirmed your order</span></div>
                                </div>
                                <div class="tracking-item
                                @if (!empty($status->in_transit))
                                tracking-complete
                              @else
                                  tracking-pending
                              @endif
                                ">
                                  <div class="tracking-icon
                                  @if (!empty($status->in_transit))
                                  status-complete
                                @else
                                    status-pending
                                @endif
                                
                                @if (!empty($status->in_transit) && empty($status->in_transit_latest) )
                            
                                    status-active
                                @endif
                                  ">
                                    <i class="flex items-center justify-center h-full">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 18.75a1.5 1.5 0 0 1-3 0m3 0a1.5 1.5 0 0 0-3 0m3 0h6m-9 0H3.375a1.125 1.125 0 0 1-1.125-1.125V14.25m17.25 4.5a1.5 1.5 0 0 1-3 0m3 0a1.5 1.5 0 0 0-3 0m3 0h1.125c.621 0 1.129-.504 1.09-1.124a17.902 17.902 0 0 0-3.213-9.193 2.056 2.056 0 0 0-1.58-.86H14.25M16.5 18.75h-2.25m0-11.177v-.958c0-.568-.422-1.048-.987-1.106a48.554 48.554 0 0 0-10.026 0 1.106 1.106 0 0 0-.987 1.106v7.635m12-6.677v6.677m0 4.5v-4.5m0 0h-12" />
                                          </svg>                                          
                                    </i>
                                  </div>
                                  <div class="tracking-date">{{$status->in_transit ?? "--"}}<span>{{ $status->in_trans_time ?? "--"}}</span></div>
                                  <div class="tracking-content">In Transit<span>Shipped to  Hub</span></div>
                                </div>
                                <div class="tracking-item
                                    
                                @if (!empty($status->in_transit_latest))
                                tracking-complete
                              @else
                                  tracking-pending
                              @endif
                                ">
                                  <div class="tracking-icon 
                                  @if (!empty($status->in_transit_latest))
                                  status-complete
                                @else
                                    status-pending
                                @endif
                                
                                @if (!empty($status->in_transit_latest) && empty($status->arrived) )
                            
                                    status-active
                                @endif
                                  ">
                                    <i class="flex items-center justify-center h-full">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 18.75a1.5 1.5 0 0 1-3 0m3 0a1.5 1.5 0 0 0-3 0m3 0h6m-9 0H3.375a1.125 1.125 0 0 1-1.125-1.125V14.25m17.25 4.5a1.5 1.5 0 0 1-3 0m3 0a1.5 1.5 0 0 0-3 0m3 0h1.125c.621 0 1.129-.504 1.09-1.124a17.902 17.902 0 0 0-3.213-9.193 2.056 2.056 0 0 0-1.58-.86H14.25M16.5 18.75h-2.25m0-11.177v-.958c0-.568-.422-1.048-.987-1.106a48.554 48.554 0 0 0-10.026 0 1.106 1.106 0 0 0-.987 1.106v7.635m12-6.677v6.677m0 4.5v-4.5m0 0h-12" />
                                          </svg>                                          
                                    </i>
                                  </div>
                                  <div class="tracking-date">{{ $status->in_transit_latest ?? "--" }}<span>{{ $status->in_trans_lat_time ?? "--"}}</span></div>
                                  <div class="tracking-content">In Transit<span>Shipped to Hub 2</span></div>
                                </div>
                                <div class="tracking-item 
                                @if (!empty($status->arrived))
                                tracking-complete
                              @else
                                  tracking-pending
                              @endif">
                                  <div class="tracking-icon 
                                  @if (!empty($status->arrived))
                                  status-complete
                                @else
                                    status-pending
                                @endif
                                
                                @if (!empty($status->arrived) && empty($status->out_for_delivery) )
                                    status-active
                                @endif
                                  ">
                                    <i class="flex items-center justify-center h-full">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M15 10.5a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1 1 15 0Z" />
                                          </svg>                                          
                                    </i>
                                  </div>
                                  <div class="tracking-date">{{ $status->arrived ?? "--"}}<span> {{ $status->arrived_time ?? "--" }} </span></div>
                                  <div class="tracking-content">Arrived<span>Shipped to Nearest Hub </span></div>
                                </div>
                                <div class="tracking-item 
                                @if (!empty($status->out_for_delivery))
                                tracking-complete
                              @else
                                  tracking-pending
                              @endif
                                " >
                                  <div class="tracking-icon 
                                  @if (!empty($status->out_for_delivery))
                                  status-complete
                                @else
                                    status-pending
                                @endif
                                
                                @if (!empty($status->out_for_delivery) && empty($status->delivery) )
                                    status-active
                                @endif
                                  ">
                                    <i class="flex items-center justify-center h-full">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" viewBox="0 0 24 24"><path fill="currentColor" d="M8.365 10L11.2 8h3.492L13.6 5H11V3h4l1.092 3H20v3h-2.816l1.456 4.002a4.5 4.5 0 1 1-1.985.392L15.419 10h-.947l-1.582 5.87l-2.925 1.069A4.5 4.5 0 1 1 4 13.256V12H2v-2zM5.5 20a2.5 2.5 0 1 0 0-5a2.5 2.5 0 0 0 0 5m13 0a2.5 2.5 0 1 0 0-5a2.5 2.5 0 0 0 0 5"/></svg>
                                    </i>
                                  </div>
                                  <div class="tracking-date">{{$status->out_for_delivery ?? "--"}}<span>{{$status->out_for_delivery_time ?? "--"}}</span></div>
                                  <div class="tracking-content">Out for Delivery<span>Delivery agent picked your order</span></div>
                                </div>
                                <div class="tracking-item 
                                @if (!empty($status->delivery))
                                tracking-complete
                              @else
                                  tracking-pending
                              @endif
                                ">
                                  <div class="tracking-icon 
                                    
                                  @if (!empty($status->delivery))
                                  status-complete
                                @else
                                    status-pending
                                @endif
                                
                                @if (!empty($status->delivery) )
                                    status-active
                                @endif
                                  ">
                                    <i class="flex items-center justify-center h-full">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="m4.5 12.75 6 6 9-13.5" />
                                          </svg>
                                    </i>
                                  </div>
                                  <div class="tracking-date">--<span>--</span></div>
                                  <div class="tracking-content">Delivered<span>Your Order Delivered Successfully</span></div>
                                </div>
                              
                        </div>
                        <div>
                            <div style="max-width:100%;overflow:hidden;color:red;height:500px;" class="w-full relative"><div id="embed-map-display" style="height:100%; width:100%;max-width:100%;"><iframe style="height:100%;width:100%;border:0;" frameborder="0" src="https://www.google.com/maps/embed/v1/directions?origin={{$track->senderLocation}}&destination={{$track->receiverLocation}}&key=AIzaSyBFw0Qbyq9zTFTd-tUY6dZWTgaQzuU17R8"></iframe></div><a class="googlecoder" href="https://www.bootstrapskins.com/themes" id="get-data-for-embed-map">premium bootstrap themes</a><style>#embed-map-display img.text-marker{max-width:none!important;background:none!important;}img{max-width:none}</style></div>
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
