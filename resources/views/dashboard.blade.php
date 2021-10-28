<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    You're logged in! 
                </div>
               
            </div>
            <br>
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <ul class="flex justify-between p-4">
                    <a href="{{ route('categories.index') }}"><li>Categories</li></a>
                    <a href="{{ route('books.index') }}"><li>books</li></a>
                    <a href="{{ route('users.index') }}"><li>Users</li></a>
                    <a href="{{ route('userstatuses.index') }}"><li>User_Statuses</li></a>
                    <a href="{{ route('departements.index') }}"><li>departements</li></a>
                </ul>
                
            </div>
        </div>
        
    </div>
</x-app-layout>
