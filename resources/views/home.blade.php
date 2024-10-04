@extends('layout')
@section('title')
home page
@endsection
@section('content')
<div class="mt-20">
    <img src="taxi-stripe.webp" alt="" class="w-full h-3">
    <img src="slide-v1-2.jpg" alt="">
    <div class="text-center flex items-center flex-col justify-center  p-10 bg-white">
        <h2 class="text-3xl font-light">choose your car</h2>
        <img src="taxi.webp" alt="" class="py-3">
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
        <div class="bg-black h-[300px] flex px-[10%] py-10 gap-6 ">
            <div class="text-white w-3/12 flex flex-col gap-5">
                <h2 class="font-light text-2xl">about city cab
                <span class=""><img src="taxi2 (1).webp" alt="" class="p-2"></span>
                </h2>
                <p>Itaque earum rerum hic tenetur a sapiente delectus, ut aut reiciendis voluptatibus maiores alias consequatur aut perferendis doloribus asperiores repellat.</p>
            </div>
            <div class="text-white w-3/12 flex flex-col gap-5">
                <h2 class="font-light text-2xl">downloads
                <span><img src="taxi2 (1).webp" alt="" class="p-2"></span>
                </h2>
                <p>Now you can download our app on every mobile device:</p>
                <div class="flex gap-3">
                    <a href="" class="rounded-full bg-yellow-400 px-4 py-2"><i class="fa-brands fa-apple"></i></a>
                    <a href="" class="rounded-full bg-yellow-400 px-4 py-2">
                    <i class="fa-brands fa-android"></i>
                    </a>
                    <a href="" class="rounded-full bg-yellow-400 px-4 py-2">
                    <i class="fa-brands fa-windows"></i></a>
                </div>
            </div>
            <div class="text-white w-3/12  flex flex-col gap-5">
                <h2 class="font-light text-2xl">more stuff
                <span><img src="taxi2 (1).webp" alt="" class="p-2"></span>
                </h2>
                <ul>
                    <li>Taxi drivers for hire in your city</li>
                    <li>Latest from our blog</li>
                    <li>Useful links - check the complete list</li>
                    <li>New bigger & better F.A.Q. section</li>
                </ul>
            </div>
            <div class="text-white w-3/12  flex flex-col gap-5">
                <h2 class="font-light text-2xl">contacts
                    <span><img src="taxi2 (1).webp" alt="" class="p-2"></span>
                </h2>
               <div class="flex flex-col"> <span>citycab (@)yoursite.com</span>
                <span>+555.777.343</span>
                <span>+555.777.344</span>
                <span> Ave and Jamison</span></div>

            </div>
           
        </div>
        <div class="w-full bg-[#0d0d0d] h-[100px] flex justify-between px-[10%] items-center">
            <span class="text-white">copyright © 2022 city cab</span>
            <div>

            </div>
            <div>
                <a href="" class="text-xl font-light text-white">about</a>
                <a href="" class=" font-light text-white">Contact</a>
            </div>
        </div>

    </div>
</div>


@endsection