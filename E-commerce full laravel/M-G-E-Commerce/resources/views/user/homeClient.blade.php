@extends('layout.layoutClient')
@section('main')
<div id="flash-message" class=" text-[#30ff42] text-[25px] flex items-center justify-center p-4 rounded mb-4">
    {{ session('success') }}
</div>
@endsection