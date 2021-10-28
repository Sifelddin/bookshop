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
                 List of All the User Statuses  
                    <a class="text-xl hover:text-indigo-900" href="{{ route('userstatuses.create') }}">create a new User Status</a>
                </div>                
            </div>       
            <br>
           
            <br>
            <h2>Generale Statuses list :</h2>
            <x-status-parent-table column="ID" column1="Status Name" :gstatuses="$g_statuses">
            </x-status-parent-table>
            <br>
            <h2>Sub Statuses list :</h2>
            <x-status-table column="ID" column1="Status Name" column2="Status Generale ID" :statuses="$statuses"></x-status-table>
                      
        </div>
        
    </div>

</x-app-layout>