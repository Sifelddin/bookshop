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
                 List of All the Categories  
                    <a class="text-xl hover:text-indigo-900 hover:underline" href="{{ route('categories.create') }}">create a new category</a>
                </div>
                
            </div>
             
            
            <br>
            
            <br>
            <h2>Categories list :</h2>
            <x-cat-parent-table column="ID" column1="Category Name" :categories="$categories">
            </x-cat-parent-table>
            <br>
            <h2>SubCategories list :</h2>
            <x-cat-table column="ID" column1="Category Name" column2="Category Parent ID" :subCategories="$subCategories"></x-cat-table>
            
              
                           
            
        </div>
        
    </div>

</x-app-layout>