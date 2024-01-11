@extends('layouts.master', ['title' => 'Home'])
<style>
    .element{
        transition: height 1s;
    }
</style>
@section('content')
    <div class="before:content-[''] before:absolute before:bottom-0 before:left-0 before:right-0 before:bg-heroSvg2 before:bg-bottom before:bg-repeat-x before:top-0 relative bg-homeHero   after:content-[''] after:bg-top-center after:absolute after:top-0 after:left-0 after:right-0 after:bottom-0 after:bg-heroSvg1 bg-cover bg-center" style="width: 100%; height: calc(100vh - 175px);" >
        <div class="relative z-10 h-full max-w-[1024px] w-full p-4 mx-auto flex justify-center items-center">
            <div class="">
                <div class="space-y-4 w-2/3">
                    <h2 class="text-white font-semibold font-work text-5xl leading-12">
                        Our team cares for your pet as much as you do.
                    </h2>
                    <p class="text-white text-xl mt-0 font-work">
                        From our Pet Transport Services team, who specialize in making all the travel arrangements for your pet, to our Pet Handlers, who care for your pet during the travel process – we all love your furry
                    </p>
                </div>
                <div class="bg-second w-full  px-8 pt-4 pb-8 mt-3  space-y-6 rounded-sm">
                    <div class="flex items-center gap-6">
                        <h3 class="text-white m-0 font-semibold text-3xl font-work">
                            Get a pet travel quote 
                        </h3>
                        <div class="w-10 h-10 ">
                            <svg xmlns="http://www.w3.org/2000/svg"  viewBox="0 0 256 256" class="rotate-90 fill-primary"><path   d="M235.58 128.84L160 91.06V48a32 32 0 0 0-64 0v43.06l-75.58 37.78A8 8 0 0 0 16 136v32a8 8 0 0 0 9.57 7.84L96 161.76v18.93l-13.66 13.65A8 8 0 0 0 80 200v32a8 8 0 0 0 11 7.43l37-14.81l37 14.81a8 8 0 0 0 11-7.43v-32a8 8 0 0 0-2.34-5.66L160 180.69v-18.93l70.43 14.08A8 8 0 0 0 240 168v-32a8 8 0 0 0-4.42-7.16M224 158.24l-70.43-14.08A8 8 0 0 0 144 152v32a8 8 0 0 0 2.34 5.66L160 203.31v16.87l-29-11.61a8 8 0 0 0-5.94 0L96 220.18v-16.87l13.66-13.65A8 8 0 0 0 112 184v-32a8 8 0 0 0-9.57-7.84L32 158.24v-17.3l75.58-37.78A8 8 0 0 0 112 96V48a16 16 0 0 1 32 0v48a8 8 0 0 0 4.42 7.16L224 140.94Z"/></svg>
                        </div>
                        
                    </div>
                    <div class="flex gap-4 items-center">
                        <div class="bg-white rounded-sm px-3 py-3 flex items-center w-full gap-4">
                            <label for="from"> FROM</label>
                            <input type="text" class="w-full outline-none" placeholder="Start typing to find a location">
                        </div>
                        <div class="bg-white rounded-sm px-3 py-3 flex items-center gap-4 w-full">
                            <label for="from"> TO</label>
                            <input type="text" class="w-full outline-none" placeholder="Start typing to find a location">
                        </div>
                        <div class="bg-primary rounded-sm px-6 py-3.5 flex items-center ">
                            <button class="text-white">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="m8.25 4.5 7.5 7.5-7.5 7.5" />
                                  </svg>
                                  
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <section class="w-full mx-auto px-1 space-y-10">
        <h2 class="text-3xl text-slate-800 text-center font-medium">
            Why choose Pet Express for your International Pet Transport Service?
        </h2>
        <div class="w-full max-w-[1024px] p-4 mx-auto">
            <div class="grid grid-cols-2 gap-12">
                <div class="flex items-start gap-6">
                    <div class="">
                        <img src="https://pet-express.com/wp-content/uploads/2021/04/caring.svg" alt="">
                    </div>
                    <div class="w-full space-y-4">
                        <h4 class="text-xl text-slate-800 capitalize font-medium">
                            Caring Team
                        </h4>
                        <p class="text-slate-800 leading-7">
                            Caring for your pets is our job, and we put the welfare of your animals above all else, always. Pet safety is always our top priority. But we also care for you. We’re here to answer your questions, support your decisions and make sure you feel comfortable and confident in our pet shipping service at all times.
                        </p>
                    </div>
                </div>
                <div class="flex items-start gap-6">
                    <div class="">
                        <img src="https://pet-express.com/wp-content/uploads/2021/04/family.svg" alt="">
                    </div>
                    <div class="w-full space-y-4">
                        <h4 class="text-xl text-slate-800 capitalize font-medium">
                            Family-Owned & Operated
                        </h4>
                        <p class="text-slate-800 leading-7">
                            We’re a family–owned and operated company, and we take that family approach into our care for you and your pet’s journey. When you work with us, you and your furry friends are family.
                        </p>
                    </div>
                </div>
                <div class="flex items-start gap-6">
                    <div class="">
                        <img src="https://pet-express.com/wp-content/uploads/2021/04/knowledgeable.svg" alt="">
                    </div>
                    <div class="w-full space-y-4">
                        <h4 class="text-xl text-slate-800 capitalize font-medium">
                            Highly Knowledgeable
                        </h4>
                        <p class="text-slate-800 leading-7">
                            Whether it’s juggling veterinary protocols, understanding the quarantine requirements of countries worldwide, or ensuring your pet has access to food and water while they travel, we have the information you need. We make the entire pet shipping experience hassle-free and are dedicated to transporting your family safely right to your front door. 
                        </p>
                    </div>
                </div>
                <div class="flex items-start gap-6">
                    <div class="">
                        <img src="https://pet-express.com/wp-content/uploads/2021/04/solution.svg" alt="">
                    </div>
                    <div class="w-full space-y-4">
                        <h4 class="text-xl text-slate-800 capitalize font-medium">
                            Solutions-Focused   
                        </h4>
                        <p class="text-slate-800 leading-7">                 
                            Solutions-Focused
                            We find solutions, not problems. Our pet shipping services are comprehensive and suitable for any big trip. We’ve transported pregnant pets, handled breed restrictions, dealt with cancelled flights and managed it all through a global pandemic. We have a ‘make it happen’ attitude because we know how important your pets are to you.
                        </p>
                    </div>
                </div>
                <div class="flex items-start gap-6">
                    <div class="">
                        <img src="https://pet-express.com/wp-content/uploads/2021/04/experts.svg" alt="">
                    </div>
                    <div class="w-full space-y-4">
                        <h4 class="text-xl text-slate-800 capitalize font-medium">
                            Industry Experts   
                        </h4>
                        <p class="text-slate-800 leading-7">                 
                            International pet transportation is constantly changing, even more so now. We keep abreast of all the most recent regulations, airline protocols and individual country requirements to ensure your pet arrives at its destination happy and well.
                        </p>
                    </div>
                </div>
                <div class="flex items-start gap-6">
                    <div class="">
                        <img src="https://pet-express.com/wp-content/uploads/2021/04/pet.svg" alt="">
                    </div>
                    <div class="w-full space-y-4">
                        <h4 class="text-xl text-slate-800 capitalize font-medium">             
                            Caring Partners  
                        </h4>
                        <p class="text-slate-800 leading-7">                 
                            We wouldn’t leave your pet transport needs with anyone who wasn’t as caring and supportive as we are ourselves. We’ve chosen to work with only the best industry partners, such as Canine Companions for Independence.
                        </p>
                    </div>
                </div>
            </div>
            <div class="flex mt-8 items-center justify-center">
                <a href="#" class="bg-primary text-center inline-block px-6 py-3 text-white font-bold rounded-md">Request quote</a>
            </div>
            
        </div>
    </section>
    <div class="bg-slate-100 w-full h-full px-4">
        <div class="max-w-[1024px] w-full mx-auto">
            <div class="grid grid-cols-2 py-20 gap-14 place-center">
                <div class="space-y-8 ">
                    <h2 class="text-5xl font-medium">
                        We are the <span class="text-primary">pet transport</span> people.
                    </h2>
                    <p class="leading-6">
                        Since 1978, our pet transportation business has been trusted by families to safely relocate their pets all over the world.  We are a family-owned and operated business that believes that the pets who move with us are very special, and so are our values: we love pets, we are the experts in pet transport, we are genuine when it comes to our knowledge and care, and we
                    </p>
                </div>
               <div class="w-full !relative">
                <div class="is-layout-flow wp-block-column !w-full !h-full">
                    <div  aria-hidden="true" class="wp-block-spacer"></div>
                    
                    
                    
                    <iframe loading="lazy" title="vimeo-player" src="https://player.vimeo.com/video/797800344?h=29b2b60281&amp;portrait=0&amp;byline=0&amp;title=0"   frameborder="0" allowfullscreen="" data-rocket-lazyload="fitvidscompatible" data-lazy-src="https://player.vimeo.com/video/797800344?h=29b2b60281&amp;portrait=0&amp;byline=0&amp;title=0" data-ll-status="loaded" class="entered lazyloaded !w-full !h-full object-cover"></iframe><noscript><iframe title="vimeo-player" src="https://player.vimeo.com/video/797800344?h=29b2b60281&amp;portrait=0&amp;byline=0&amp;title=0" width="640" height="360" frameborder="0" allowfullscreen=""></iframe></noscript>
                    </div>
               </div>
            </div>
        </div>
    </div>
    <section class="w-full px-4 max-w-[1024px] mx-auto">
        <div class="flex justify-center items-center text-center">
           <div class="lg:space-y-16 space-y-10">
            <div class="lg:space-y-7 space-y-6">
                <h2 class="font-medium lg:text-3xl text-2xl text-slate-800">
                    How pet transport services work
                </h2>
                <p class="leading-6 lg:w-2/3 w-10/12 mx-auto lg:text-lg text-md text-slate-800">
                    Pet Express can take care of the entire process and provide a pet shipping service that is stress free – for both owners and pets!
                </p>
            </div>
                <div class="mt-2">
                    <a href="#" class="capitalize lg:px-8 lg:py-5 rounded-sm py-4 px-6 lg:w-fit w-10/12 inline-block font-bold bg-thirdly text-white">
                        international pet travel
                    </a>
                </div>
            </div>
        </div>
    </section>
    <section class="w-full px-4 max-w-[1024px] mt-16 mx-auto">
        <div class="grid lg:grid-cols-4 grid-cols-1 gap-16">
            <div class="space-y-3 flex flex-col items-center justify-center text-center">
                <img src="https://pet-express.com/wp-content/themes/pet-express/components/assets/images/travel-crate-icon.svg" alt="">
                <h4 class="text-second font-medium uppercase">
                    BOOK A TRAVEL CRATE
                </h4>
                <p class="text-second">
                    We can provide the correct size crate to keep your pet safe & happy.
                </p>
            </div>
            <div class="space-y-3 flex flex-col items-center justify-center text-center">
                <img src="https://pet-express.com/wp-content/themes/pet-express/components/assets/images/itinerary-icon.svg" alt="">
                <h4 class="text-second font-medium uppercase">
                    GET PET ITINERARY
                </h4>
                <p class="text-second">
                    A broken down itinerary of your pet’s travel and shipping information.
                </p>
            </div>
            <div class="space-y-3 flex flex-col items-center justify-center text-center">
                <img src="https://pet-express.com/wp-content/themes/pet-express/components/assets/images/healthcheck-icon.svg" alt="">
                <h4 class="text-second font-medium uppercase">
                    PET FIT TO FLY
                </h4>
                <p class="text-second">
                    Your pet is given the all clear by one of our partner vets to take off.
                </p>
            </div>
            <div class="space-y-3 flex flex-col items-center justify-center text-center">
                <img src="https://pet-express.com/wp-content/themes/pet-express/components/assets/images/boarding-pass-icon.svg" alt="">
                <h4 class="text-second font-medium uppercase">
                    TIME TO FLY
                </h4>
                <p class="text-second">
                    We take care of pickup, accommodation and transport to your destination.
                </p>
            </div>
        </div>
    </section>
    <section class="bg-thirdly py-32 px-4 overflow-hidden">
        <div class="w-full mx-auto max-w-[1024px]">
            <div class="space-y-12 w-full">
                <div class="space-y-5 w-full max-w-9/12 text-center">
                    <h2 class="font-medium text-3xl text-white">
                        Wherever Your Pet Needs to Go, We’ll Get Them There
                    </h2>
                    <p class="text-white text-md">
                        Moving your beloved pets can be emotional and confusing, especially when every country has their own set of rules and regulations. We transport pets cross country or anywhere in the world. And whether they’re going to Sydney, Australia, Florida, USA, or London, UK, we always ensure the process is smooth and seamless for both you and your multiple pets, no matter where you need them to go.
                    </p>
                </div>
                <div class="lg:grid lg:grid-cols-5 lg:place-center flex flex-col items-center justify-center text-center  gap-16">
                    <div class="space-y-6 text-center">
                        <img src="https://pet-express.com/wp-content/uploads/2021/04/hawaii@2x.jpg" alt="">
                        <h2 class="text-xl uppercase text-white mx-auto w-10/12">Hawaii</h2>
                    </div>
                    <div class="space-y-6 text-center">
                        <img src="https://pet-express.com/wp-content/uploads/2021/04/united-kingdom@2x.jpg" alt="">
                        <h2 class="text-xl uppercase text-white mx-auto w-10/12">United kingdom</h2>
                    </div>
                    <div class="space-y-6 text-center">
                        <img src="https://pet-express.com/wp-content/uploads/2021/04/australia@2x.jpg" alt="">
                        <h2 class="text-xl uppercase text-white mx-auto w-10/12">Australia</h2>
                    </div>
                    <div class="space-y-6 text-center">
                        <img src="https://pet-express.com/wp-content/uploads/2021/04/new-zealand@2x.jpg" alt="">
                        <h2 class="text-xl uppercase text-white mx-auto w-10/12">new zealand</h2>
                    </div>
                    <div class="space-y-6 text-center">
                        <img src="https://pet-express.com/wp-content/uploads/2021/04/new-zealand@2x.jpg" alt="">
                        <h2 class="text-xl uppercase text-white mx-auto w-10/12">ireland</h2>
                    </div>
                </div>
                <div class="flex mt-8 items-center justify-center">
                    <a href="#" class="bg-primary text-center inline-block px-6 py-3 text-white font-bold rounded-md">Request quote</a>
                </div>
            </div>
        </div>
    </section>
    <section class="bg-slate-100 w-full py-24 px-4">
        <div class="w-full max-w-[1024px] mx-auto">
            <div class="grid grid-cols-2 gap-14">
                <div class="space-y-8">
                    <h2 class="text-slate-800 text-3xl font-medium">
                        What We’re Talking About on the Blog
                    </h2>
                    <p class="text-slate-800 text-md">
                        Our entire team are pet owners as well as pet relocation specialists. So, when we say that we live and breathe pet relocation, we really mean it.
                    </p>
                    <p class="text-slate-800 text-base">
                        On the blog, we write about location relocation requirements, how to keep your pet healthy and happy during their pet transport service and everything in between. Check it out.
                    </p>
                    <div class="inline-block bg-thirdly font-bold text-white text-md px-4 capitalize py-4 rounded-sm">
                        <a href="#"> Read our most popular blogs</a>
                    </div>
                </div>
                <div class="w-full">
                    <img src="https://pet-express.com/wp-content/uploads/2021/06/Mask-Group-1.png" alt="">
                </div>
            </div>
        </div>
    </section>
    
    <section class="w-full px-4">
        <h2 class="text-center text-3xl text-slate-800 font-bold">
            FAQs
        </h2>
        <div class="w-full max-w-[1024px] mx-auto space-y-3">
            <div class="item py-4 border-b border-black overflow-hidden cursor-pointer">
                <div class="flex justify-between items-center">
                    <h3 class="text-2xl font-medium">
                        Is it safe for pets to fly?
                    </h3>
                    <div class="text-primary mr-2 font-semibold text-xl border w-8 h-8 flex justify-center items-center text-center rounded-full border-2 border-primary">
                        +
                    </div>
                </div>
                <div class="element h-0" >
                    <p class="py-4 desc" >
                        Air travel is as safe for pets as it is for people. Airlines have staff that are trained in pet shipping and who will care for your beloved pet on their journey. And, of course, we take care of everything to ensure your pet has a happy and safe journey.
                    </p>
                </div>
                
            </div>
            <div class="item py-4 border-b border-black overflow-hidden cursor-pointer">
                <div class="flex justify-between items-center">
                    <h3 class="text-2xl font-medium">
                        Where does my pet travel on the plane?
                    </h3>
                    <div class="text-primary mr-2 font-semibold text-xl border w-8 h-8 flex justify-center items-center text-center rounded-full border-2 border-primary">
                        +
                    </div>
                </div>
                <div class="element h-0" >
                    <p class="py-4 desc" >
                        Your pet will travel in a special cargo compartment within the aircraft. This compartment is both climate-controlled and pressurized for your pet’s safety and comfort, and it’s on the same air circulation system as the cabin.
                    </p>
                </div>
                
            </div>
            <div class="item py-4 border-b border-black overflow-hidden cursor-pointer">
                <div class="flex justify-between items-center">
                    <h3 class="text-2xl font-medium">
                        Where can I get a strong, comfortable travel crate?
                    </h3>
                    <div class="text-primary mr-2 font-semibold text-xl border w-8 h-8 flex justify-center items-center text-center rounded-full border-2 border-primary">
                        +
                    </div>
                </div>
                <div class="element h-0" >
                    <p class="py-4 desc" >
                        Pet Express can provide strong, sturdy and comfortable travel crates to our clients that provide protection during loading and unloading and give your precious pets plenty of space to stretch out and move around. Our crates will keep your pet secure where some lightweight crates sourced from pet stores may flex during handling, enabling the door to accidentally open.
                    </p>
                </div>
                
            </div>
            <div class="item py-4 border-b border-black overflow-hidden cursor-pointer">
                <div class="flex justify-between items-center">
                    <h3 class="text-2xl font-medium">
                        How much will it cost to relocate my pet?
                    </h3>
                    <div class="text-primary mr-2 font-semibold text-xl border w-8 h-8 flex justify-center items-center text-center rounded-full border-2 border-primary">
                        +
                    </div>
                </div>
                <div class="element h-0" >
                    <p class="py-4 desc" >
                        The price for pet transport can vary substantially depending on the location, so we’ll need to provide you with a specific quote to suit your needs. Our pet shipping services are always competitive, and we try to work within your budget without compromising the safety and comfort of your animals.
                    </p>
                </div>
                
            </div>
            <div class="item py-4 border-b border-black overflow-hidden cursor-pointer">
                <div class="flex justify-between items-center">
                    <h3 class="text-2xl font-medium">
                        Will my pet have to stay in quarantine?
                    </h3>
                    <div class="text-primary mr-2 font-semibold text-xl border w-8 h-8 flex justify-center items-center text-center rounded-full border-2 border-primary">
                        +
                    </div>
                </div>
                <div class="element h-0" >
                    <p class="py-4 desc" >
                        Only a handful of countries actually require your pet to stay in quarantine upon arrival. These are the strict rabies-free countries like Australia, New Zealand and Singapore. If you’re relocating your pet to one of these countries, they may need to spend a few days in quarantine. But in most other countries, there are no quarantine requirements at all.
                    </p>
                </div>
                
            </div>
        </div>
    </section>
    <section class="bg-slate-100 w-full py-24 px-4">
        <div class="w-full max-w-[1024px] mx-auto">
            <div class="grid grid-cols-2 gap-14">
                
                <div class="w-full">
                    <img src="https://pet-express.com/wp-content/uploads/2021/04/home-transport.jpg" alt="">
                </div>
                <div class="space-y-8">
                    <h2 class="text-slate-800 text-3xl font-medium">
                        What We’re Talking About on the Blog
                    </h2>
                    <p class="text-slate-800 text-md">
                        Our entire team are pet owners as well as pet relocation specialists. So, when we say that we live and breathe pet relocation, we really mean it.
                    </p>
                    <p class="text-slate-800 text-base">
                        On the blog, we write about location relocation requirements, how to keep your pet healthy and happy during their pet transport service and everything in between. Check it out.
                    </p>
                    <div class="flex gap-4">
                        <div class="inline-block bg-thirdly font-bold text-white text-md px-4 capitalize py-4 rounded-sm">
                            <a href="#"> About dog relocation</a>
                        </div>
                        <div class="inline-block bg-thirdly font-bold text-white text-md px-4 capitalize py-4 rounded-sm">
                            <a href="#"> about cat relocation</a>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
    </section>

    <div class="before:content-[''] before:absolute before:bottom-0 before:left-0 before:right-0 before:bg-heroSvg2 before:bg-bottom before:bg-repeat-x before:top-0 relative bg-petBanner   after:content-[''] after:bg-top-center after:absolute after:top-0 after:left-0 after:right-0 after:bottom-0 after:bg-heroSvg1 bg-cover bg-center" style="width: 100%;" >
        <div class="relative z-10 w-full p-8 mx-auto flex justify-center items-center">
            <div class="py-12 w-10/12">
                
                <div class="bg-second w-full px-8 pt-4 pb-8 mt-3  space-y-6 rounded-sm">
                    <div class="flex items-center gap-6">
                        <h3 class="text-white m-0 font-semibold text-3xl font-work">
                            Get a pet travel quote 
                        </h3>
                        <div class="w-10 h-10 ">
                            <svg xmlns="http://www.w3.org/2000/svg"  viewBox="0 0 256 256" class="rotate-90 fill-primary"><path   d="M235.58 128.84L160 91.06V48a32 32 0 0 0-64 0v43.06l-75.58 37.78A8 8 0 0 0 16 136v32a8 8 0 0 0 9.57 7.84L96 161.76v18.93l-13.66 13.65A8 8 0 0 0 80 200v32a8 8 0 0 0 11 7.43l37-14.81l37 14.81a8 8 0 0 0 11-7.43v-32a8 8 0 0 0-2.34-5.66L160 180.69v-18.93l70.43 14.08A8 8 0 0 0 240 168v-32a8 8 0 0 0-4.42-7.16M224 158.24l-70.43-14.08A8 8 0 0 0 144 152v32a8 8 0 0 0 2.34 5.66L160 203.31v16.87l-29-11.61a8 8 0 0 0-5.94 0L96 220.18v-16.87l13.66-13.65A8 8 0 0 0 112 184v-32a8 8 0 0 0-9.57-7.84L32 158.24v-17.3l75.58-37.78A8 8 0 0 0 112 96V48a16 16 0 0 1 32 0v48a8 8 0 0 0 4.42 7.16L224 140.94Z"/></svg>
                        </div>
                        
                    </div>
                    <div class="flex gap-4 items-center">
                        <div class="bg-white rounded-sm px-3 py-3 flex items-center w-full gap-4">
                            <label for="from"> FROM</label>
                            <input type="text" class="w-full outline-none" placeholder="Start typing to find a location">
                        </div>
                        <div class="bg-white rounded-sm px-3 py-3 flex items-center gap-4 w-full">
                            <label for="from"> TO</label>
                            <input type="text" class="w-full outline-none" placeholder="Start typing to find a location">
                        </div>
                        <div class="bg-primary rounded-sm px-6 py-3.5 flex items-center ">
                            <button class="text-white">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="m8.25 4.5 7.5 7.5-7.5 7.5" />
                                  </svg>
                                  
                            </button>
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
const items = document.querySelectorAll('.item')
items.forEach(el => {
    el.onclick = () => {
        let desc = el.querySelector('.element')
        if (desc.classList.contains("h-0")) {
            desc.classList.remove("h-0")
            desc.classList.add("h-28")
        } else if(desc.classList.contains("h-28")) {
            desc.classList.remove("h-28")
            desc.classList.add("h-0")
        }
    }
});
</script>

    @endpush
