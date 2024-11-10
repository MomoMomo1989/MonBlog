@extends('layout.layoutClient')
@section('main')
<div id="flash-message" class=" w-full h-[40px] flex justify-center items-center ">
    <div class="text-[#252424] bg-[#dcf5bf] text-[25px] flex items-center justify-center rounded-[10px] p-4  ">
        {{ session('success') }}
    </div>
</div>
@endsection