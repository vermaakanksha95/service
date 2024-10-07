@extends('layout')
@section('title')
home page
@endsection
@section('content')
<div class="mt-20">
    <img src="taxi-stripe.webp" alt="" class="w-full h-3">
    <img src="blog1.webp" alt="" class=" w-full">
    <div class="text-center flex items-center flex-col justify-center  p-10 bg-white">
        <h2 class="text-3xl font-light">choose your car</h2>

    </div>
    <div class="bg-white">
        <ul class="flex gap-3  items-center justify-center ">
            <li class=" ">
                <a href="" class="text-yellow-600 border border-yellow-600 rounded-full px-3 py-2 hover:text-white hover:bg-yellow-600">Town Taxi</a>
            </li>
            <li class="">
                <a href="" class="text-yellow-600 border border-yellow-600 rounded-full px-3 py-2 hover:text-white hover:bg-yellow-600">Hybrid Taxi</a>
            </li>
            <li class="flex items-center justify-center ">
                <a href="" class="text-yellow-600 border border-yellow-600 rounded-full px-3 py-2 hover:text-white hover:bg-yellow-600">Limousine Taxi</a>
            </li>
            <li class="flex items-center justify-center ">
                <a href="" class="text-yellow-600 border border-yellow-600 rounded-full px-3 py-2 hover:text-white hover:bg-yellow-600">SUV Taxi</a>
            </li>
        </ul>
        <img src="town.webp" alt="" class="w-full">
        <div class=" w-full px-[10%] flex gap-3 bg-white items-start py-5">
            <div class="w-4/12 border-2 bg-yellow-600 text-white text-cente rounded-full text-center py-2">
                <h2>Base Rate:<br>
                    <span class="font-semibold text-lg"> $5</span>
                </h2>

            </div>


            <div class="w-4/12 border-2 bg-yellow-600 text-white text-cente rounded-full text-center py-2 items-start ">
                <h2>Base Rate:<br>
                    <span class="font-semibold text-lg"> $5</span>
                </h2>

            </div>
            <div class="w-4/12 border-2 bg-yellow-600 text-white text-cente rounded-full text-center py-2">
                <h2>Base Rate:<br>
                    <span class="font-semibold text-lg"> $5</span>
                </h2>

            </div>
        </div>
        <img src="citydrop.webp" alt="" class="h-[700px] w-full">
        <div class="w-full h-[400px]"></div>
        <div>
            <img src="testimonials-bg-section.webp" alt="">
            <img src="testimonials-bg-section.webp" alt="">


        </div>
        <div class="text-center flex items-center flex-col justify-center  p-10">
            <h2 class="text-3xl font-light">lost property</h2>
            <img src="taxi.webp" alt="" class="py-3">
            <p>Did you lost something in one of our taxis?</p>
            <p> No need to panic! we're keeping all lost & found items in our storage. just follow these 3 easy steps:</p>
        </div>
        <div class="flex gap-10 px-10 items-center justify-center">
            <img src="step1.webp" alt="" class=" rounded-full w-[350px] h-[350px]">
            <img src="step2.webp" alt="" class=" rounded-full w-[350px] h-[350px]">
            <img src="step3.webp" alt="" class=" rounded-full w-[350px] h-[350px]">

        </div>

        <div class="py-10 flex flex-col items-cemter justify-center gap-3">
            <p class="text-center "> we value our clients deeply and we want you to be happy 🙂</p>
            <a href="" class="bg-yellow-600 text-white px-5 py-2 self-center rounded-full">Contact Us now</a>
        </div>
        <img src="city.webp" alt="" class="h-[700px] w-full">



        <div class="bg-yellow-400 h-[600px] ">
            <div class="text-center flex items-center flex-col justify-center  p-10">
                <h2 class="text-3xl font-light">taxi advertising</h2>
                <img src="taxi.webp" alt="" class="py-3">

            </div>
            <div class="w-full flex px-[10%] gap-10 py-5">
                <div class="w-4/12 gap-5 flex flex-col">
                    <h2 class="text-3xl font-light text-black">advertise on our taxis now!</h2>
                    <p class="text-white">Grab people’s attention with awesome advertising campaigns on our taxi cars. Reach thousands of people with your creative ad.</p>
                    <h2 class="text-3xl font-light text-black">3 easy steps:</h2>
                    <div class="flex flex-col">
                        <span class="text-white">Choose a taxi model</span>
                        <span class="text-white">Choose advertising position</span>
                        <span class="text-white">Select time period</span>
                    </div>
                    <div class="mt-5 gap-5 flex flex-col">
                        <h2 class="font-light text-3xl">contact us and get started!</h2>
                        <a href="" class="bg-black text-white px-5 py-2 self-center rounded-full">Contact Us for pricing</a>
                    </div>
                </div>
                <div class="flex gap-5 w-8/12">
                    <img src="taxi1.webp" alt="" class=" w-[350px] h-[350px]">
                    <img src="taxi1.webp" alt="" class="w-[350px] h-[350px]">
                </div>
            </div>
        </div>


    </div>
    @include('footer')

</div>


@endsection