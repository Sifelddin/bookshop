<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>
<div class="w-10/12 mx-auto">
    <div class="flex justify-between">
    <h2 class="text-xl my-4">Suppliers List</h2>
    <a href="{{ route('users.index') }}"><h2 class="text-xl my-4 mr-4">Back</h2></a>
    </div>
    @foreach ($statuses as $status)
    
    
   {{-- Importer: sub status  of  general status: Supplier   --}}
    @if ($status->status_name == 'Importer')
         <div>
           
             {{ $status->status_name }}s :
       <x-user-table :users="$status->users" :status="$status">
       </x-user-table>
     </div> 
     <br>
       @else
       <div>
           {{ $status->status_name }}s :
       <x-user-table :users="$status->users" :status="$status">
       </x-user-table>
       </div> 
       @endif        
       @endforeach
    </div>    
</x-app-layout>