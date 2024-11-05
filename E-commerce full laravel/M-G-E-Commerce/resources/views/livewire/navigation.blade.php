

    <div class="nav-pos1 max-w-[100vw] h-[80px] flex justify-between items-center sticky top-0 pl-28 pr-28 drop-shadow-lg bg-[#ececec] z-10">
        
        <div class="{{ $activeS ? 'flex items-center justify-center w-[100%]' : 'hidden' }} relative">
            <img src="images/nav/chercher.png" class="absolute left-[9rem] h-[25px] w-[25px] cursor-pointer " alt="" >
            <input type="search" name="" id="" class=" pl-12 search {{ $activeS ? 'actesea' : '' }} " placeholder="Tapez votre recherche ici ...">
            <img src="images/nav/ferm.png" class="absolute right-[140px] h-[20px] w-[20px] cursor-pointer " alt="" wire:click="desactiveSearch" >
        </div>
        
     @if (!$activeS)
    <div class="flex justify-between items-center sous-na-reduite ">
        <div class="flex justify-center items-center font-bold text-[25px] mr-10">LOGO</div>
        <div class="">
               <ul class="flex justify-center items-center">
                <li class="p-[0px] menu1 relative"><a href="" class="p-[10px] h-[40px] w-auto hover:border-b-[1px] hover:border-[#e87316] hover:text-[#e87316] block menu2  ">MENU 1 &#x25BE </a>
                    <ul class="sous-menu hidden">
                        <li>sous menu 1</li>
                        <li>sous menu 2</li>
                        <li>sous menu 3</li>
                        <li>sous menu 4</li>
                    </ul>
                </li>
                <li class="p-[0px] "><a href="" class="p-[10px] h-[40px] w-auto hover:border-b-[1px] hover:border-[#e87316] hover:text-[#e87316] block menu2 ">MENU 2</a></li>
                <li class="p-[0px] "><a href="" class="p-[10px] h-[40px] w-auto hover:border-b-[1px] hover:border-[#e87316] hover:text-[#e87316] block menu2 ">MENU 3</a></li>
                <li class="p-[0px] menu1 relative "><a href="" class="p-[10px] h-[40px] w-auto hover:border-b-[1px] hover:border-[#e87316] hover:text-[#e87316] block menu2 ">MENU 4 &#x25BE</a>
                    <ul class="sous-menu hidden">
                        <li>sous menu 1</li>
                        <li>sous menu 2</li>
                        <li>sous menu 3</li>
                        <li>sous menu 4</li>
                    </ul>
                </li>
                <li class="p-[0px] "><a href="" class="p-[10px] h-[40px] w-auto hover:border-b-[1px] hover:border-[#e87316] hover:text-[#e87316] block menu2 ">MENU 5</a></li>
                <li class="p-[0px] "><a href="" class="p-[10px] h-[40px] w-auto hover:border-b-[1px] hover:border-[#e87316] hover:text-[#e87316] block menu2 ">MENU 6</a></li>
               </ul>
        </div>
    </div>
    <div class="flex justify-center items-center  ">
        <div class="h-[40px] w-[40px] bg-[#e87316] flex justify-center items-center mr-6 cursor-pointer">
            <img src="images/nav/search.png" alt="" class="h-[25px] w-[25px] hover:h-[29px] hover:w-[29px] item-nav  active-search" wire:click="activeSearch" >
        </div>
        <div class="mr-6 cursor-pointer h-[40px] w-[40px] flex justify-center items-center flex-col relative ">
            <div class=" h-5 w-5 flex items-center justify-center bg-[#e87316] rounded-[50%] absolute top-[-5px] right-[-2px] hover:h-7 hover:w-7 item-nav">
                <span class=" text-[#f7f6f5]   text-[10px]  item-nav hover:text-[20px]">15</span>
            </div>
            <div class="">
                <img src="images/nav/-favoris.png" alt="" class="h-[25px] w-[25px]  ">
            </div>
        </div>
        <div class="mr-6 cursor-pointer h-[40px] w-[40px] flex justify-center items-center flex-col relative ">
            <div class=" h-5 w-5 flex items-center justify-center bg-[#e87316] rounded-[50%] absolute top-[-5px] right-[-2px] hover:h-7 hover:w-7 item-nav">
                <span class=" text-[#f7f6f5]   text-[10px]  item-nav hover:text-[20px]">6</span>
            </div>
            <div class="">
                <img src="images/nav/panier.png" alt="" class="h-[25px] w-[25px]  ">
            </div>
        </div>
        <livewire:profil-user />
    </div>
    @endif
   </div>

