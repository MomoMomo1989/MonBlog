<div class="w-[350px] h-[100vh] flex flex-col items-center justify-center menu-lateral" id="menu-lat">
    <div class="flex items-center justify-between h-[80px] px-6 border-b-[1px] w-[100%] border-[#d6d3d3]">
          <div class="flex items-center justify-center">
            <img src="images/Logo/logo.jpg" alt="" class="h-[50px] w-[50px] mr-3">
            Logo
          </div>
          <div class="flex items-center justify-center">
            <button onclick="reduireMen()" class="btn-menu-lateral" onmouseover="changeImg(this , 'images/admin/gauche-bleu.png')" onmouseout="changeImg(this , 'images/admin/gauche-gris.png')"><img src="images/admin/gauche-gris.png" alt="" class="h-[30px] w-[30px] img-gauche-gris" id="img-menu"></button>
          </div>
    </div>
    <div class="w-[100%] h-[100%] pl-0 pt-5 ">
        <div class="mb-6  cursor-pointer pl-6 ">
            <div class="text-[#a39797] mb-3">main home</div>
            <div class="flex items-center justify-start">
                <img src="images/admin/dash.png" alt="" class="w-[18px] h-[18px] mr-3 ">
                <h1 class="text-[#525050]">Dashboard</h1>
            </div>
        </div>
        <div class="">
             <ul class="">
                <li class="flex h-auto  ml-[2px]" id="li-1">
                    <div class=" "></div>
                    <div class="pl-3 ">
                        <div class="flex justify-start items-center cursor-pointer mb-1 menu-opt-1 pr-1 relative  w-[246px]  " onclick="afficheSousMenu('li-1','content-menu1','sousMenu1')" id="content-menu1">
                            <img src="images/admin/panier.png" alt="" class="w-[18px] h-[18px] mr-3">
                            <button class="mr-[120px] ">products</button>
                            <img src="images/admin/down.png" alt="" class="w-[18px] h-[18px] cursor-pointe absolute right-[4px]  ">
                        </div>
                        <ul class="pl-12 list-disc hid-sous-menu transition-height  h-[120px]" id="sousMenu1">
                            <li><button>Add product</button></li>
                            <li><button>products</button></li>
                        </ul>
                    </div>
                </li>
                <li class="flex  ml-[2px]" id="li-2">
                    <div class=" "></div>
                    <div class="pl-3">
                        <div class="flex justify-start items-center cursor-pointer mb-1 menu-opt-1 pr-1 relative w-[246px]  " onclick="afficheSousMenu('li-2','content-menu2','sousMenu2')" id="content-menu2">
                            <img src="images/admin/panier.png" alt="" class="w-[18px] h-[18px] mr-3">
                            <button class="mr-[120px] ">Brands</button>
                            <img src="images/admin/down.png" alt="" class="w-[18px] h-[18px] cursor-pointer absolute right-[4px] ">
                        </div>
                        <ul class="pl-12 list-disc hid-sous-menu transition-height  h-[120px] " id="sousMenu2">
                            <li><button>Add Brand</button></li>
                            <li><button>Brands</button></li>
                        </ul>
                    </div>
                </li>
                <li class="flex  ml-[2px]" id="li-3">
                    <div class=" "></div>
                    <div class="pl-3">
                        <div class="flex justify-start items-center cursor-pointer mb-1 menu-opt-1 pr-1 relative  w-[246px] " onclick="afficheSousMenu('li-3','content-menu3','sousMenu3')" id="content-menu3">
                            <img src="images/admin/panier.png" alt="" class="w-[18px] h-[18px] mr-3">
                            <button class="mr-[120px] ">Category</button>
                            <img src="images/admin/down.png" alt="" class="w-[18px] h-[18px] cursor-pointer absolute right-[4px] ">
                        </div>
                        <ul class="pl-12 list-disc hid-sous-menu transition-height h-[120px] " id="sousMenu3">
                            <li><button>Add Category</button></li>
                            <li><button>Category</button></li>
                        </ul>
                    </div>
                </li>
                <li class="flex  ml-[2px]" id="li-4">
                    <div class=" "></div>
                    <div class="pl-3">
                        <div class="flex justify-start items-center cursor-pointer mb-1 menu-opt-1 pr-1 relative  w-[246px] " onclick="afficheSousMenu('li-4','content-menu4','sousMenu4')" id="content-menu4">
                            <img src="images/admin/panier.png" alt="" class="w-[18px] h-[18px] mr-3">
                            <button class="mr-[120px] ">Order</button>
                            <img src="images/admin/down.png" alt="" class="w-[18px] h-[18px] cursor-pointer absolute right-[4px] ">
                        </div>
                        <ul class="pl-12 list-disc hid-sous-menu transition-height h-[120px] " id="sousMenu4">
                            <li><button>Add Order</button></li>
                            <li><button>Order</button></li>
                        </ul>
                    </div>
                </li>
                
            </ul>
        </div> 
    </div>

</div>
