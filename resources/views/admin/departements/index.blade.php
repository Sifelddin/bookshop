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
                    List of All the Departements
                    <a class="text-xl hover:text-indigo-900" href="{{ route('departements.create') }}">create a new Departement</a>
                </div>
                
            </div>

            <br>
            <h2>Departements list :</h2>
            <x-dep-table column="ID" column1="Departement Name" :departements="$departements">
            </x-dep-table>
           
              
                           
            
        </div>
        
    </div>

</x-app-layout>