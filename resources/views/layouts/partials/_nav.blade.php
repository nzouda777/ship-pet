<nav class="bg-white w-full md:block hidden text-second shadow-lg px-4 py-2">
    <div class="flex justify-between w-full items-center">
        <div class="logo w-10/12">
            <a href="{{route('home')}}">
                <img src="https://pet-express.com/wp-content/themes/pet-express/components/assets/images/pxp_logo.png" class="w-34 h-12" alt="">
            </a>
        </div>
    <div class="w-6/12">
        <ul class="flex gap-8 justify-between">
            <li class="inline-block">
                <a href="{{route('home')}}" class="w-full hover:text-primary" >Home</a>
            </li>
            <li class="inline-block">
                <a href="{{route('team')}}" class="w-full hover:text-primary">Team</a>
            </li>
            <li class="inline-block">
                <a href="{{route('partners')}}" class="w-full hover:text-primary">Partners</a>
            </li>
            <li class="inline-block">
                <a href="{{route('track')}}" class="w-full hover:text-primary">Tracking</a>
            </li>
        </ul>
            
    </div>    
</div>    
</nav>

<nav  class=" w-full !top-0 fixed !z-50 text-white   md:hidden block">
    <div class="bg-second relative  justify-between py-4 px-4  w-full">
        <div class="flex justify-between items-center">
            <div class="logo w-10/12">
                <a href="{{route('home')}}">
                    <img src="https://pet-express.com/wp-content/themes/pet-express/components/assets/images/pxp_logo.png" class="w-34 h-12" alt="">
                </a>
            </div>
            <div class="block close cursor-pointer">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M6 18 18 6M6 6l12 12" />
                  </svg>
                  
            </div>
            <div class="block open cursor-pointer">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 9h16.5m-16.5 6.75h16.5" />
                  </svg>
                  
            </div>
        </div>
    
    <div id="menu" class="w-screen left-0 h-screen bg-second absolute py-5 px-4 space-y-3">
        <ul class=" gap-8 flex flex-col items-center justify-between">
            <li class="py-2">
                <a href="{{route('home')}}" class="w-full hover:text-primary inline-block">Home</a>
            </li>
            <li class="py-2">
                <a href="{{route('team')}}" class="w-full hover:text-primary inline-block">Team</a>
            </li>
            <li class="py-2">
                <a href="{{route('partners')}}" class="w-full hover:text-primary inline-block">Partners</a>
            </li>
            <li class="py-2">
                <a href="{{route('track')}}" class="w-full hover:text-primary inline-block">Tracking</a>
            </li>
        </ul>
            
    </div>    
</div>    
</nav>
<style>
    .close{
        display: none;

    }
    #menu{
        transform: translateX(100%);
        transition: transform 1s;

    }
</style>
<script>
    const open = document.querySelector(".open")
    const close = document.querySelector(".close")
    open.onclick = () => {
        if (document.querySelector("#menu").style.transform == "translateX(100%)") {
         
        open.style.display = "none"
        document.querySelector("#menu").style.transform = "translateX(0%)"
        close.style.display = "block"   
        } else {
        open.style.display = "block"
        document.querySelector("#menu").style.transform = "translateX(100%)"
        close.style.display = "none"
        }
    }
    close.onclick = () => {
        if (document.querySelector("#menu").style.transform == "translateX(0%)") {
         
        close.style.display = "none"
        document.querySelector("#menu").style.transform = "translateX(100%)"
        open.style.display = "block"   
        } else {
        close.style.display = "block"
        document.querySelector("#menu").style.transform = "translateX(100%)"
        open.style.display = "none"
        }
    }
</script>