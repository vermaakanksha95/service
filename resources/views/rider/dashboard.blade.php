@extends('rider.riderbase')
@section('title',"Dashboard|")

@section('content')
<div class="flex flex-1 p-5 flex-col gap-10">
    <div class=" flex flex-1">
        <h2 class=" border-l-4 border-pink-500 pl-2 text-xl">Rider Dashboard</h2>
    </div>
    <div class=" grid grid-cols-4 gap-5">
        <div class="flex flex-col items-center justify-center bg-red-100 py-8 px-10">
            <span class="mb-2 text-3xl font-extrabold">10+</span>
            <span class="text-gray-500 dark:text-gray-400">Admin</span>
        </div>
        <div class="flex flex-col items-center justify-center bg-pink-100 py-8 px-10">
            <span class="mb-2 text-3xl font-extrabold">10+</span>
            <span class="text-gray-500 dark:text-gray-400">Cabs</span>
        </div>
        <div class="flex flex-col items-center justify-center bg-green-100 py-8 px-10">
            <span class="mb-2 text-3xl font-extrabold">10+</span>
            <span class="text-gray-500 dark:text-gray-400">Booking</span>
        </div>
        <div class="flex flex-col items-center justify-center bg-orange-100 py-8 px-10">
            <span class="mb-2 text-3xl font-extrabold">10+</span>
            <span class="text-gray-500 dark:text-gray-400">Orders</span>
        </div>

    </div>
   


</div>
@endsection