<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')Admin Panel</title>
    @vite('resources/css/app.css')
</head>

<body>
    <header class="bg-black shadow-lg ">
        <div class="container  px-10 py-4 flex justify-between items-center">
            <div class="text-2xl font-bold text-white">
                <a href="#">CityCab</a>
            </div>
            <a href="#" class="bg-black text-white rounded-md">Logout</a>

        </div>
    </header>

    <div class=" flex flex-1">

        <div class="w-64 h-screen bg-gray-900 shadow-lg hidden sm:block">
            <div class="p-6 ">
                <a href="#" class="text-white text-2xl font-semibold"></a>
            </div>
            <nav class="mt-10">
                <a href="{{route('admin.dashboard')}}" class="block py-2.5 px-4 rounded transition duration-200 text-gray-200 hover:bg-gray-700 hover:text-white">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 inline-block mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-3-3v6m3 6v-6m-6-3h6m-6 6v-6" />
                    </svg>
                    Dashboard
                </a>

                <a href="{{route('cabs.index')}}" class="block py-2.5 px-4 rounded transition duration-200 text-gray-200 hover:bg-gray-700 hover:text-white">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 inline-block mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5l6 6m0 0l-6 6m6-6H5" />
                    </svg>
                    Manage Cabs
                </a>
                <a href="#" class="block py-2.5 px-4 rounded transition duration-200 text-gray-200 hover:bg-gray-700 hover:text-white">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 inline-block mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5l6 6m0 0l-6 6m6-6H5" />
                    </svg>
                    Insert Cabs
                </a>
                <a href="#" class="block py-2.5 px-4 rounded transition duration-200 text-gray-200 hover:bg-gray-700 hover:text-white">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 inline-block mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5l6 6m0 0l-6 6m6-6H5" />
                    </svg>
                    Manage Bookings
                </a>
                <a href="#" class="block py-2.5 px-4 rounded transition duration-200 text-gray-200 hover:bg-gray-700 hover:text-white">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 inline-block mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5l6 6m0 0l-6 6m6-6H5" />
                    </svg>
                    Manage Payments
                </a>
                <a href="#" class="block py-2.5 px-4 rounded transition duration-200 text-gray-200 hover:bg-gray-700 hover:text-white">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 inline-block mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5l6 6m0 0l-6 6m6-6H5" />
                    </svg>
                    Setting
                </a>
            </nav>
        </div>

        <div class=" w-10/12">
            @section('content')

            @show

        </div>
    </div>

</body>

</html>