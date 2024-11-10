
<div class="h-[40px] w-[40px] bg-[#e87316] rounded-[50%] flex justify-center items-center cursor-pointer relative tog-prof">
    <img src="images/nav/user.png" alt="" class="h-[25px] w-[25px] hover:h-[29px] hover:w-[29px] item-nav">
    <ul class="w-[120px] h-[40px] bg-[#ffffff] absolute bottom-[-40px] right-4 p-2 text-[#424242] tog-prof-3">
           <form action="{{ route('LogOut') }}" method="POST">
           @csrf
           <li class="tog-prof-2 text-[15px]"><button type="submit" class="h-[100%] w-[100%] " >Log Out</button></li>
           </form>      
    </ul>
</div>