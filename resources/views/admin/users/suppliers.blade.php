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
    <x-user-table :users="$users">
    </x-user-table>
</div>
</x-app-layout>