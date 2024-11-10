@extends('layout.layoutClient')
@section('main')
<div id="flash-message" class=" w-full h-[40px] flex justify-center items-center ">
    <div class="text-[#252424] bg-[#dcf5bf] text-[25px] flex items-center justify-center rounded-[10px] p-4 ">
        {{ session('success') }}
    </div>
</div>
<form action="{{ route('storeLogin') }}" method="POST" class="h-[auto] w-[100%] flex flex-col justify-center items-center">
   @csrf
    <div class="mt-[75px] mb-[54px]">
    <h1 class="text-[#383838] text-[25px] border-b-2 border-[#383838] pb-2">Login</h1>
   </div>
   <div class="mb-[25px] ">
       <div class="relative flex flex-col mb-[30px]">
        <label for="" class="absolute top-[-12px] left-4 bg-white px-1 ">E-mail</label>
        <input type="email" name="email" id="" class="outline-none pl-[16px] h-[47px] w-[500px] border-[2px] border-[#5e5e5e] bg-transparent ">
         @error('email')
         <div class="text-red-500 text-sm mt-1">{{ $message }}</div>
         @enderror   
       </div>
       <div class="relative flex flex-col">
        <label for="" class="absolute top-[-12px] left-4 bg-white px-1 ">Password</label>
        <input type="password" name="password" id="" class="outline-none pl-[16px] h-[47px] w-[500px] border-[2px] border-[#5e5e5e] bg-transparent ">
        @error('password')
        <div class="text-red-500 text-sm mt-1">{{ $message }}</div>
        @enderror   
    </div>
   </div>
   <div class="mb-[25px]">
    <button type="submit" class=" btn-log-in h-[60px] w-[500px] bg-[#e875168f] text-[#272727] hover:bg-[#e87316] hover:text-[#ffffff]">LOG IN</button>
   </div>
<div class="flex mb-[52px]">
    <h1 class="text-[15px] text-[#444]">No account yet?</h1>
    <span><a href="" class="underline decoration-1 " > Create Account </a></span>
    <span class="px-1 ">  |  </span>
    <span><a href="" class="underline decoration-1"> My Account</a></span>
</div>
</div>
@endsection