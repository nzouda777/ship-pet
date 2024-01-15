@extends('layouts.master', ['title' => 'Team'])
<style>
    .element{
        transition: height 1s;
    }
</style>
@section('content')

    <div class="before:content-[''] before:absolute before:bottom-0 before:left-0 before:right-0 before:bg-heroSvg2 before:bg-bottom before:bg-repeat-x before:top-0 relative bg-homeHero   after:content-[''] after:bg-top-center after:absolute after:top-0 after:left-0 after:right-0 after:bottom-0 after:bg-heroSvg1 bg-cover bg-center" style="width: 100%; height: calc(100vh - 175px);" >
        <div class="relative z-10 h-full max-w-[1024px] w-full p-4 mx-auto flex justify-center items-center">
            <div class="">
                <div class="space-y-4 md:w-2/3">
                    <h2 class="text-white font-semibold font-work text-5xl leading-12">
                        Our Caring Team
                    </h2>
                    <p class="text-white text-xl mt-0 font-work">
                        Our fabulous team has been carefully selected to ensure that you and your pet encounter the highest level of care at every stage of your experience with Pet Express. With many long serving and knowledgeable team members, we are the pet travel experts who love what we do!
                    </p>
                </div>
                

                
            </div>
        </div>
    </div>

    <section class="bg-slate-100 w-full py-24 px-4">
        <div class="w-full max-w-[1024px] mx-auto">
            <div class="grid md:grid-cols-2 gap-14 place-center items-center">
                <div class="space-y-5">
                    <h2 class="text-slate-800 text-3xl font-medium">
                        Caring for your pets is our job.
                    </h2>
                    <p class="text-slate-800">
                        Do a job you love and you will never work a day in your life! That’s how we feel at Pet Express. Pet cuddles and happy family reunions are what motivates our amazing team of pet lovers.
                    </p>
                    
                </div>
                <div class="w-full">
                    <img src="https://pet-express.com/wp-content/uploads/2019/03/caring-for-pets-1.jpg" alt="">
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
                            <a href="{{route('track')}}" class="text-white md:block hidden">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="m21 21-5.197-5.197m0 0A7.5 7.5 0 1 0 5.196 5.196a7.5 7.5 0 0 0 10.607 10.607Z" />
                                  </svg>                                      
                            </a>
                            <a href="{{route('track')}}" class="text-white md:hidden flex items-center justify-center w-full">
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
