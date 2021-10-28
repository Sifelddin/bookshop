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
                    books list
                    <a class="text-xl" href="{{ route('books.create') }}">create a new book</a>
                </div>
               
            </div>
            <br>
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
             <h1>books list</h1>
                
            </div>
        </div>
        
    </div>

</x-app-layout>