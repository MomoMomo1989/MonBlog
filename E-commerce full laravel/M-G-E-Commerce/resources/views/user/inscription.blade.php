@extends('layout.layoutClient')
@section('main')

<form action="{{ route('storeregister') }}" method="POST" class="h-[auto] w-[100%] flex flex-col justify-center items-center">
    @csrf
    <div class="mt-[75px] mb-[54px]">
     <h1 class="text-[#383838] text-[25px] border-b-2 border-[#383838] pb-2">S'inscrire</h1>
    </div>
    <div class=" ">
        <div class="relative flex flex-col mb-[30px]">
            <label for="" class="absolute top-[-12px] left-4 bg-white px-1 required ">Nom</label>
            <input type="text" name="name" id="" class="outline-none pl-[16px] h-[47px] w-[500px] border-[2px] border-[#8f8f8f] bg-transparent ">
            @error('name')
            <div class="text-red-500 text-sm mt-1">{{ $message }}</div>
            @enderror
        </div>
        <div class="relative flex flex-col mb-[30px]">
         <label for="" class="absolute top-[-12px] left-4 bg-white px-1 " value="{{ old('email') }}">E-mail</label>
         <input type="email" name="email" id="" class="outline-none pl-[16px] h-[47px] w-[500px] border-[2px] border-[#8f8f8f] bg-transparent ">
         @error('email')
         <div class="text-red-500 text-sm mt-1">{{ $message }}</div>
         @enderror
        </div>
        <div class="relative flex flex-col mb-[30px]">
            <label for="" class="absolute top-[-12px] left-4 bg-white px-1 ">Téléphone</label>
            <input type="text" name="telephone" id="" class="outline-none pl-[16px] h-[47px] w-[500px] border-[2px] border-[#8f8f8f] bg-transparent ">
            @error('telephone')
               <div class="text-red-500 text-sm mt-1">{{ $message }}</div>
            @enderror      
        </div>
        <div class="relative flex flex-col mb-[30px]">
         <label for="" class="absolute top-[-12px] left-4 bg-white px-1 ">Password</label>
         <input type="password" name="password" id="password" class="outline-none pl-[16px] h-[47px] w-[500px] border-[2px] border-[#8f8f8f] bg-transparent ">
           @error('password')
            <div class="text-red-500 text-sm mt-1">{{ $message }}</div>
           @enderror 
        </div>
        <div class="relative flex flex-col ">
            <label for="" class="absolute top-[-12px] left-4 bg-white px-1 ">Confirme Password</label>
            <input type="password" name="password_confirmation" id="password_confirmation" class="outline-none pl-[16px] h-[47px] w-[500px] border-[2px] border-[#8f8f8f] bg-transparent ">
        </div>
    </div>
    <span class="h-[auto] w-[500px] text-[#8f8f8f] mt-[25px] mb-[25px] text-justify" >Vos données personnelles seront utilisées pour soutenir votre expérience sur ce site Web, pour gérer l'accès à votre compte et à d'autres fins décrites dans notre politique de confidentialité.</span>
    <div class="mb-[25px]">
     <button type="submit" class=" btn-log-in h-[60px] w-[500px] bg-[#e875168f] text-[#272727] hover:bg-[#e87316] hover:text-[#ffffff]">Register</button>
    </div>
 <div class="flex mb-[52px]">
     <h1 class="text-[15px] text-[#444]">Have an account?</h1>
     <span><a href="" class="underline decoration-1 " > Login to your Account </a></span>
 </div>
</form>


@endsection