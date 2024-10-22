@extends('layout')
@section('content')
<div class="flex gap-10 w-full bg-slate-600 ">

    <div>
        <img src="Taxi-Booking-App.png" alt="">
    </div>
    <div class="mt-20 flex-1 flex items-center justify-center flex-col">
        <h2 class="text-2xl  font-semibold p-1 text-yellow-500">Start Your Journey with Us</h2>
        <form action="" class="p-5   rounded  items-center  ">
            <div class="flex flex-col mb-3">
                <label for="" class="text-white">pick up location</label>
                <input type="text" class="w-full  px-3 py-2 rounded flex">
            </div>
            <div class="flex flex-1 flex-col mb-3">
                <label for="" class="text-white">drop off location</label>
                <input type="text" class="w-full px-3 py-2 rounded">
            </div>
            <a href="" class="bg-yellow-500 text-white px-3 py-2 rounded  font-semibold self-center">Book Now</a>
        </form>
    </div>
</div>

@endsection