@extends('admin.adminbase')

@section('title',"Manage Cabs|")

@section('content')

<div class=" flex p-10 gap-5">
    <div class=" w-4/12">


        <div class="w-full max-w-sm p-4 bg-white border border-gray-200 rounded-lg shadow sm:p-6 md:p-8 dark:bg-gray-800 dark:border-gray-700">
            <form class="space-y-4" action="{{route('cabs.store')}}" method="post">
                @csrf
                <h5 class="text-xl font-medium text-gray-900 dark:text-white">Insert CAB Details</h5>
                <div>
                    <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Cab Name</label>
                    <input type="name" name="name" id="name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" placeholder="" required />
                </div>
                <div>
                    <label for="cab_seat" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Cab Seat</label>
                    <input type="text" name="cab_seat" id="cab_seat" placeholder="" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" required />
                </div>
                <div>
                    <label for="cab no" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Cab Number</label>
                    <input type="text" name="cab_no" id="cab_no" placeholder="" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" required />
                </div>
                <div>
                    <label for="cab type" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Cab Type</label>
                    <input type="text" name="cab_type" id="cab_type" placeholder="" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" required />
                </div>
                <div>
                    <label for="image" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">image</label>
                    <input type="file" name="image" id="image" placeholder="" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" required />
                </div>

                <button type="submit" class="w-full text-white bg-slate-700 hover:bg-blue-800 focus:ring-4 focus:outline-none  font-medium rounded-lg text-sm px-5 py-2.5 text-center">Insert Cab Details</button>

            </form>
        </div>


    </div>
    <div class=" w-8/12">


        <div class="relative overflow-x-auto">
            <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                    <tr>
                        <th scope="col" class="px-6 py-3">
                            Cab Name
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Cab Seat
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Cab Number
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Cab Type
                        </th>
                        <th scope="col" class="px-6 py-3">
                            image
                        </th>
                        <th scope="col" class="px-6 py-3">
                        Action
                        </th>
                    </tr>
                </thead>
                <tbody>
                @foreach($cabs as $cab)
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                       
                        <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            {{$cab->name}}
                        </th>
                        <td class="px-6 py-4">
                        {{$cab->cab_seat}}
                        </td>
                        <td class="px-6 py-4">
                    {{$cab->cab_no}}
                        </td>
                        <td class="px-6 py-4">
                        {{$cab->cab_type}}
                        </td>
                        <td class="px-6 py-4">
                        {{$cab->image}}
                        </td>
                        <td class="px-6 py-4">
                        <a href="" class="text-white bg-red-600 px-3 py-2 text-center">Delete</a>
                        </td>
                       
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>


    </div>

</div>
@endsection