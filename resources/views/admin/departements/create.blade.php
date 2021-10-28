<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Creating a new Deparetement') }}
        </h2>
    </x-slot>
    
    <x-create-card>
        <x-auth-validation-errors class="mb-4" :errors="$errors" />
    <form method="POST" action="{{ route('departements.store') }}">
        @csrf
        <!-- firstname -->
        <div>
            <x-label for="Dep_name" :value="__('Departement name')" />
            <x-input id="Dep_name" class="block mt-1 w-full" type="text" name="dep_name" :value="old('Departement name')" required autofocus />
        </div>
           <x-button class="ml-4 mt-3">
                {{ __('Create') }}
            </x-button>
        </div>
    </form>
    </x-create-card>
</x-app-layout>