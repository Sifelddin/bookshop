<x-app-layout>

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="flex justify-between p-6 bg-white border-b border-gray-200">
                     <p>Users lists</p> <span>users total : {{ $users }}</span>  
                </div>
               
            </div>
            <br>
            <div class=" p-4 flex justify-between bg-white overflow-hidden shadow-sm sm:rounded-lg">
            <a class="hover:text-indigo-900 hover:underline" href="{{ route('employees') }}">  Employees list</a>
            <a class="hover:text-indigo-900 hover:underline" href="{{ route('customers') }}">  Customers list</a>
            <a class="hover:text-indigo-900 hover:underline" href="{{ route('suppliers') }}">  Suppliers list</a>
                <!-- This example requires Tailwind CSS v2.0+ -->

  
            </div>
        </div>
        
    </div>

</x-app-layout>