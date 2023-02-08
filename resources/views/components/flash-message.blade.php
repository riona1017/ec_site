@props(['status' => 'info'])

@php
    if($status === 'info'){$bgColor = 'bg-blue-300';}
    if($status === 'error'){$bgColor = 'bg-red-500';}
@endphp

@if(session('message'))
    <div class="{{ $bgColor }} w-1/3 mx-auto p-5 text-white">
        {{ session('message') }}
    </div>
@endif