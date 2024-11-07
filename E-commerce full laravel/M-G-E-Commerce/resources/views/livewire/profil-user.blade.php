
<div class="h-[40px] w-[40px] bg-[#e87316] flex justify-center items-center cursor-pointer relative tog-prof">
    <img src="images/nav/user.png" alt="" class="h-[25px] w-[25px] hover:h-[29px] hover:w-[29px] item-nav">
    <ul class="w-[120px] h-[80px] bg-[#ffffff] absolute bottom-[-80px] right-0 p-2 text-[#424242] tog-prof-1">
       @auth
       <form action="{{ route('LogOut') }}" method="POST">
        @csrf
        <li class="tog-prof-2 text-[15px]"><button type="submit" class="h-[100%] w-[100%] " >Log Out</button></li>
       </form>
       @endauth
       @guest
       <form action="{{ route('Login') }}" method="POST">
        @csrf
        <li class="tog-prof-2 text-[15px]"><button type="submit" class="h-[100%] w-[100%] " >Login</button></li>
       </form> 
        <div class="w-full border-t border-[#424242] my-2"></div>
        <li class="tog-prof-2 text-[15px]"><button type="submit" class="h-[100%] w-[100%] " >Register</button></li>
        @endguest      
    </ul>
</div>