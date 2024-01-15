@extends('layouts.master', ['title' => 'Partners'])
<style>
    .element{
        transition: height 1s;
    }
</style>
@section('content')
    <div class="before:content-[''] before:absolute before:bottom-0 before:left-0 before:right-0 before:bg-heroSvg2 before:bg-bottom before:bg-repeat-x before:top-0 relative bg-partnerBanner after:content-[''] after:bg-top-center after:absolute after:top-0 after:left-0 after:right-0 after:bottom-0 after:bg-heroSvg1 bg-cover bg-center" style="width: 100%; height: calc(100vh - 175px);" >
        <div class="relative z-10 h-full max-w-[1024px] w-full p-4 mx-auto flex justify-center items-center">
            <div class="">
                <div class="space-y-4 md:w-2/3 w-12/12">
                    <h2 class="text-white font-semibold font-work text-5xl leading-12">
                        We only work with caring professionals
                    </h2>
                    <p class="text-white text-xl mt-0 font-work">
                        We work closely with vets, airlines and trusted partners globally and throughout the USA, meaning we can offer travel solutions in almost any location. We are also very proud to work with Canine Companions for Independence and Humane Society International.
                    </p>
                </div>
                

                
            </div>
        </div>
    </div>
    <section class="w-full  px-4 py-16">
        <div class="max-w-[1024px] space-y-8 w-full mx-auto">
            <h2 class="text-slate-800 md:text-3xl text-2xl py-4 font-medium">
                Meet our partners
            </h2>
            <div class="md:grid md:grid-cols-2 md:gap-16 flex flex-col gap-10">
                <div class="space-y-2">
                    <div class="space-y-3">
                        <a href="#">
                            <img src="https://pet-express.com/wp-content/uploads/2019/03/jetpets-485x324.jpg" alt="">
                        </a>
                        <div class="space-y-1">
                            <h2 class="font-medium md:text-2xl text-xl">
                                Jetpets Animal Transport
                            </h2>
                            <p class="text-slate-400 uppercase md:text-base text-sm">
                                australia'a no. 1 pet transport company
                            </p>
                        </div>
                    </div>
                    <p class="text-slate-700 text-light">
                        For our customers relocating to Australia and requiring a reunion post quarantine, we always recommend Jetpets.  As Australia’s leading pet transport company, Jetpets has been reuniting families with their pets for over 27 years. Their team of pet travel experts pick up from quarantine and provide a complete door to door service to any location in Australia. Built on a company culture based around pet loving, professional and friendly customer service, the team at Jetpets pride themselves on setting the highest possible standards of care for all travelling pets.
                    </p>
                    
                </div>

                <div class="space-y-2">
                    <div class="space-y-3">
                        <a href="#">
                            <img src="https://pet-express.com/wp-content/uploads/2022/05/resqus-logo-full-485x324.png" alt="">
                        </a>
                        <div class="space-y-1">
                            <h2 class="font-medium md:text-2xl text-xl">
                                RESQUS Foundation
                            </h2>
                        </div>
                    </div>
                    <p class="text-slate-700 text-light">
                        We partner with the RESQUS Foundation to support the inspirational work they are doing to rescue, rehabilitate and provide responsible adoption opportunities for shelter dogs from the streets of Mexico.  The RESQUS Foundation collaborates internationally to ensure that they find the best homes for these beautiful rescue dogs.  You can help too!  Visit their website for ways to donate and check out their Instagram to see the precious pups looking for a loving home.  You might just find a new family member!
                    </p>
                    
                </div>

                <div class="space-y-2">
                    <div class="space-y-3">
                        <a href="#">
                            <img src="https://pet-express.com/wp-content/uploads/2019/03/cci-485x324.png" alt="">
                        </a>
                        <div class="space-y-1">
                            <h2 class="font-medium md:text-2xl text-xl">
                                Canine Companions for Independence
                            </h2>
                        </div>
                    </div>
                    <p class="text-slate-700 text-light">
                        We love these guys and it is a pleasure to act as their chosen transport partner in San Francisco. This wonderful organization supports our community by breeding, raising and training dogs which are provided to people with disabilities or special needs.  This organization operates without government funding, and can only survive with community and corporate support. Please see their websites for more information, and consider them when organizing your next community fundraiser.
                    </p>
                    
                </div>

                <div class="space-y-2">
                    <div class="space-y-3">
                        <a href="#">
                            <img src="https://pet-express.com/wp-content/uploads/2019/03/hsi-485x324.png" alt="">
                        </a>
                        <div class="space-y-1">
                            <h2 class="font-medium md:text-2xl text-xl">
                                Humane Society International
                            </h2>
                        </div>
                    </div>
                    <p class="text-slate-700 text-light">
                        Humane Society International is one of the only global animal protection organizations working to help all animals – including animals in laboratories, animals on farms, companion animals and wildlife. We are proud to have partnered with Humane Society International on the ground in the USA providing logistical support for dogs rescued from Korean dog meat farms. HSI is doing courageous and inspiring work to protect animals from cruelty, so please consider them as worthy recipients for any charitable donations.
                    </p>
                    
                </div>

                <div class="space-y-2">
                    <div class="space-y-3">
                        <a href="#">
                            <img src="https://pet-express.com/wp-content/uploads/2019/03/we-partner-with-airlines-485x273.jpeg" alt="">
                        </a>
                        <div class="space-y-1">
                            <h2 class="font-medium md:text-2xl text-xl">
                                Airlines
                            </h2>
                        </div>
                    </div>
                    <p class="text-slate-700 text-light">
                        We work closely with both domestic and international airlines to ensure that we can provide the ultimate travel experience for your pet. Our airline partners prioritize pet welfare and work closely with us to identify travel solutions that will keep your pet comfortable and safe.
                    </p>
                    
                </div>
                <div class="space-y-2">
                    <div class="space-y-3">
                        <a href="#">
                            <img src="https://pet-express.com/wp-content/uploads/2019/03/ipata-485x324.png" alt="">
                        </a>
                        <div class="space-y-1">
                            <h2 class="font-medium md:text-2xl text-xl">
                                International Pet and Animal Transportation Association
                            </h2>
                        </div>
                    </div>
                    <p class="text-slate-700 text-light">
                        Pet Express is a charter member of the International Pet and Animal Transportation Association (IPATA), where some of our staff members have served in a number of roles including President and various Board & Committee positions.    
                    </p>
                    
                </div>
            </div>
        </div>
    </section>
    
    <div class="before:content-[''] before:absolute before:bottom-0 before:left-0 before:right-0 before:bg-heroSvg2 before:bg-bottom before:bg-repeat-x before:top-0 relative bg-teamBanner  after:content-[''] after:bg-top-center after:absolute after:top-0 after:left-0 after:right-0 after:bottom-0 after:bg-heroSvg1 bg-cover bg-center" style="width: 100%;" >
        <div class="relative z-10 w-full md:p-8 p-4 mx-auto flex justify-center items-center">
            <div class="py-12 md:w-10/12 w-full">
                <div class="bg-second w-full  md:px-8 px-4 pt-4 pb-8 mt-3  space-y-6 rounded-sm">
                    <div class="flex items-center gap-6">
                        <h3 class="text-white m-0 font-semibold md:text-3xl text-xl font-work">
                            Get a pet travel quote 
                        </h3>
                        <div class="w-10 h-10 ">
                            <svg xmlns="http://www.w3.org/2000/svg"  viewBox="0 0 256 256" class="rotate-90 fill-primary"><path   d="M235.58 128.84L160 91.06V48a32 32 0 0 0-64 0v43.06l-75.58 37.78A8 8 0 0 0 16 136v32a8 8 0 0 0 9.57 7.84L96 161.76v18.93l-13.66 13.65A8 8 0 0 0 80 200v32a8 8 0 0 0 11 7.43l37-14.81l37 14.81a8 8 0 0 0 11-7.43v-32a8 8 0 0 0-2.34-5.66L160 180.69v-18.93l70.43 14.08A8 8 0 0 0 240 168v-32a8 8 0 0 0-4.42-7.16M224 158.24l-70.43-14.08A8 8 0 0 0 144 152v32a8 8 0 0 0 2.34 5.66L160 203.31v16.87l-29-11.61a8 8 0 0 0-5.94 0L96 220.18v-16.87l13.66-13.65A8 8 0 0 0 112 184v-32a8 8 0 0 0-9.57-7.84L32 158.24v-17.3l75.58-37.78A8 8 0 0 0 112 96V48a16 16 0 0 1 32 0v48a8 8 0 0 0 4.42 7.16L224 140.94Z"/></svg>
                        </div>
                        
                    </div>
                    <div class="md:flex gap-4 space-y-2 items-center">
                        <div class="bg-white rounded-sm px-3 py-1 flex items-center w-full gap-4">
                            <label for="from"> FROM</label>
                            <input type="text" class="w-full outline-none border-none" placeholder="Start typing to find a location">
                        </div>
                        <div class="bg-white rounded-sm px-3 py-1 flex items-center gap-4 w-full ">
                            <label for="from"> TO</label>
                            <input type="text" class="w-full outline-none border-none" placeholder="Start typing to find a location">
                        </div>
                        <div class="bg-second ring-primary ring-1 rounded-sm px-6 py-3.5 flex items-center ">
                            <button class="text-white hidden md:block">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="m8.25 4.5 7.5 7.5-7.5 7.5" />
                                  </svg>
                                </button>
                            <button class="text-white md:hidden flex items-center justify-center w-full">
                                <p class="text-center text-white font-medium text-md">Request quote</p>
                            </button>
                        </div>
                        
                        <div class="bg-primary rounded-sm px-6 py-3.5 flex items-center ">
                            <a href="{{route('track.')}}" class="text-white md:block hidden">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="m21 21-5.197-5.197m0 0A7.5 7.5 0 1 0 5.196 5.196a7.5 7.5 0 0 0 10.607 10.607Z" />
                                  </svg>                                      
                            </a>
                            <a href="{{route('track.')}}" class="text-white md:hidden flex items-center justify-center w-full">
                                <p class="text-center text-white font-medium text-md">Track order</p>                                         
                            </a>
                        </div>
                    </div>
                </div>
            </div>
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
