@vite('resources/css/app.css')
@extends('layout')

<img src="taxi-stripe.webp" alt="" class="w-full h-3 mt-20">

<!-- Main Section -->
<section class="flex flex-wrap items-center justify-between py-12 px-8">
    <!-- Taxi Image -->
    <div class="w-full md:w-1/2">
        <img src="about1.webp" alt="Taxi Image" class="w-full">
    </div>
    <!-- Info Section -->
    <div class="w-full md:w-1/2 px-8">
        <h2 class="text-lg font-bold text-gray-600 uppercase mb-4">We are a professional Indian taxi company</h2>
        <p class="text-gray-500 mb-6">We are operating in 10 European countries including Great Britain, France, Germany, Spain, and Portugal.</p>

        <!-- Customer Satisfaction -->
        <div class="mb-4">
            <p class="text-sm font-semibold text-gray-600 mb-2">Customer Satisfaction <span class="float-right">100%</span></p>


            <div class="relative mb-6">
                <label for="labels-range-input" class="sr-only">Labels range</label>
                <input id="labels-range-input" type="range" value="1000" min="100" max="1500" class="w-full h-2 bg-orange-400 rounded-lg appearance-none cursor-pointer dark:bg-gray-700">
                <span class="text-sm text-yellow-500 dark:text-gray-400 absolute start-0 -bottom-6 ">Min (100)</span>
                <span class="text-sm text-red-500 dark:text-gray-400 absolute start-1/3 -translate-x-1/2 rtl:translate-x-1/2 -bottom-6">500</span>
                <span class="text-sm text-green-500 dark:text-gray-400 absolute start-2/3 -translate-x-1/2 rtl:translate-x-1/2 -bottom-6">1000</span>
                <span class="text-sm text-blue-500 dark:text-gray-400 absolute end-0 -bottom-6">Max (1500)</span>
            </div>

            <p class="text-xs text-gray-400">All our customers are happy</p>
        </div>

        <!-- Reaction Time -->
        <div class="mb-4">
            <p class="text-sm font-semibold text-gray-600 mb-2">Reaction Time <span class="float-right">97%</span></p>
            <div class="bg-gray-200 rounded-full h-2.5">
                <div class="bg-yellow-600 h-2.5 rounded-full" style="width: 97%;"></div>
            </div>
            <p class="text-xs text-gray-400">We have available cars almost 100% of the time</p>
        </div>

        <!-- City Coverage -->
        <div class="mb-4">
            <p class="text-sm font-semibold text-gray-600 mb-2">City Coverage <span class="float-right">45%</span></p>
            <div class="bg-gray-200 rounded-full h-2.5">
                <div class="bg-yellow-600 h-2.5 rounded-full" style="width: 45%;"></div>
            </div>
            <p class="text-xs text-gray-400">We're expanding every day, but we still need time <span>😊</span></p>
        </div>
    </div>
</section>


<div class=" w-full h-[500px] bg-yellow-400 ">

    <section class="flex flex-wrap items-center justify-between py-12 px-8">

        <!-- Info Section -->
        <div class="w-full md:w-1/2 px-8">
            <h2 class="text-lg font-bold text-gray-600 uppercase mb-4">We are a professional Indian taxi company</h2>
            <p class="text-gray-500 mb-6">We are operating in 10 European countries including Great Britain, France, Germany, Spain, and Portugal.</p>

            <!-- Customer Satisfaction -->
            <div class="mb-4">
                <p class="text-sm font-semibold text-gray-600 mb-2">Customer Satisfaction <span class="float-right">100%</span></p>
                <div class="bg-gray-200 rounded-full h-2.5">
                    <div class="bg-yellow-600 h-2.5 rounded-full" style="width: 100%;"></div>
                </div>
                <p class="text-xs text-gray-400">All our customers are happy</p>
            </div>

            <!-- Reaction Time -->
            <div class="mb-4">
                <p class="text-sm font-semibold text-gray-600 mb-2">Reaction Time <span class="float-right">97%</span></p>
                <div class="bg-gray-200 rounded-full h-2.5">
                    <div class="bg-yellow-600 h-2.5 rounded-full" style="width: 97%;"></div>
                </div>
                <p class="text-xs text-gray-400">We have available cars almost 100% of the time</p>
            </div>

            <!-- City Coverage -->
            <div class="mb-4">
                <p class="text-sm font-semibold text-gray-600 mb-2">City Coverage <span class="float-right">45%</span></p>
                <div class="bg-gray-200 rounded-full h-2.5">
                    <div class="bg-yellow-600 h-2.5 rounded-full" style="width: 45%;"></div>
                </div>
                <p class="text-xs text-gray-400">We're expanding every day, but we still need time <span>😊</span></p>
            </div>
        </div>

        <!-- Taxi Image -->
        <div class="w-full md:w-1/2">
            <img src="about2.webp" alt="Taxi Image" class="w-full">
        </div>
    </section>


</div>
<div class=" w-full h-[500px]">
    <section class="flex flex-wrap items-center justify-between py-12 px-8">
        <!-- Taxi Image -->
        <div class="w-full md:w-1/2">
            <img src="about3.webp" alt="Taxi Image" class="w-full">
        </div>
        <!-- Info Section -->
        <div class="w-full md:w-1/2 px-8">
            <h2 class="text-lg font-bold text-gray-600 uppercase mb-4">We are a professional Indian taxi company</h2>
            <p class="text-gray-500 mb-6">We are operating in 10 European countries including Great Britain, France, Germany, Spain, and Portugal.</p>

            <!-- Customer Satisfaction -->
            <div class="mb-4">
                <p class="text-sm font-semibold text-gray-600 mb-2">Customer Satisfaction <span class="float-right">100%</span></p>
                <div class="bg-gray-200 rounded-full h-2.5">
                    <div class="bg-yellow-600 h-2.5 rounded-full" style="width: 100%;"></div>
                </div>
                <p class="text-xs text-gray-400">All our customers are happy</p>
            </div>

            <!-- Reaction Time -->
            <div class="mb-4">
                <p class="text-sm font-semibold text-gray-600 mb-2">Reaction Time <span class="float-right">97%</span></p>
                <div class="bg-gray-200 rounded-full h-2.5">
                    <div class="bg-yellow-600 h-2.5 rounded-full" style="width: 97%;"></div>
                </div>
                <p class="text-xs text-gray-400">We have available cars almost 100% of the time</p>
            </div>

            <!-- City Coverage -->
            <div class="mb-4">
                <p class="text-sm font-semibold text-gray-600 mb-2">City Coverage <span class="float-right">45%</span></p>
                <div class="bg-gray-200 rounded-full h-2.5">
                    <div class="bg-yellow-600 h-2.5 rounded-full" style="width: 45%;"></div>
                </div>
                <p class="text-xs text-gray-400">We're expanding every day, but we still need time <span>😊</span></p>
            </div>
        </div>
    </section>

</div>

<div class=" w-full h-[500px] bg-yellow-400">

    <section class="flex flex-wrap items-center justify-between py-12 px-8">

        <!-- Info Section -->
        <div class="w-full md:w-1/2 px-8">
            <h2 class="text-lg font-bold text-gray-600 uppercase mb-4">We are a professional Indian taxi company</h2>
            <p class="text-gray-500 mb-6">We are operating in 10 European countries including Great Britain, France, Germany, Spain, and Portugal.</p>

            <!-- Customer Satisfaction -->
            <div class="mb-4">
                <p class="text-sm font-semibold text-gray-600 mb-2">Customer Satisfaction <span class="float-right">100%</span></p>
                <div class="bg-gray-200 rounded-full h-2.5">
                    <div class="bg-yellow-600 h-2.5 rounded-full" style="width: 100%;"></div>
                </div>
                <p class="text-xs text-gray-400">All our customers are happy</p>
            </div>

            <!-- Reaction Time -->
            <div class="mb-4">
                <p class="text-sm font-semibold text-gray-600 mb-2">Reaction Time <span class="float-right">97%</span></p>
                <div class="bg-gray-200 rounded-full h-2.5">
                    <div class="bg-yellow-600 h-2.5 rounded-full" style="width: 97%;"></div>
                </div>
                <p class="text-xs text-gray-400">We have available cars almost 100% of the time</p>
            </div>

            <!-- City Coverage -->
            <div class="mb-4">
                <p class="text-sm font-semibold text-gray-600 mb-2">City Coverage <span class="float-right">45%</span></p>
                <div class="bg-gray-200 rounded-full h-2.5">
                    <div class="bg-yellow-600 h-2.5 rounded-full" style="width: 45%;"></div>
                </div>
                <p class="text-xs text-gray-400">We're expanding every day, but we still need time <span>😊</span></p>
            </div>
        </div>

        <!-- Taxi Image -->
        <div class="w-full md:w-1/2">
            <img src="about4.webp" alt="Taxi Image" class="w-full">
        </div>
    </section>

</div>

<div class=" w-full h-[450px] bg-black">

</div>

<div class=" w-full h-[600px] bg-slate-100">
    <div class=" p-10">
        <h1 class=" text-2xl font-light mt-5">Contact</h1>
        <img src="taxi-stripe.webp" alt="" class=" w-24 h-2 mt-5">
        <h2 class=" mt-5 font-light">Send an email. All fields with an * are required.</h2>

        <div class=" mt-6">
            <form action="" method="post">
                <div class=" flex  gap-24 items-center">
                    <label for="">Name</label>
                    <input type="text" class=" px-3 py-2 border border-black rounded-2xl w-full mt-5">
                </div>
                <div class=" flex  gap-24 items-center">
                    <label for="">Email</label>
                    <input type="email" class=" px-3 py-2 border border-black rounded-2xl w-full mt-5">
                </div>
                <div class=" flex  gap-24 items-center">
                    <label for="">Subject</label>
                    <input type="text" class=" px-3 py-2 border border-black rounded-2xl w-full mt-5">
                </div>
                <div class=" flex  gap-24 items-center">
                    <label for="">Message</label>
                    <textarea rows="5" class=" px-3 py-2 border border-black rounded-2xl w-full mt-5"></textarea>
                </div>
                <a href="" class=" px-3 py-2 bg-yellow-600 text-white rounded-2xl  p-5">Send Email</a>


            </form>

        </div>
    </div>

</div>
@include('footer')