<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Updating the name of the departement') }}
        </h2>
    </x-slot>
  
    <x-create-card>
        <x-auth-validation-errors class="mb-4" :errors="$errors" />
    <form method="POST" action="{{ route('departements.update',$departement) }}">
        @csrf
        @method('put')
       <div>
        ID: <span>{{ $departement->dep_id }}</span>
       </div>
        <br>
        <div>
           
            <x-label for="Dep_name" :value="__('Departement Name')"/>
            <x-input id="Dep_name" class="block mt-1 w-full" type="text" name="dep_name" value="{{ $departement->dep_name }}" required autofocus />
        </div>
        <br>
        <div class="flex justify-between">
           <x-button class="ml-4 mt-3">
                {{ __('Update') }}
            </x-button>
            <x-button class="mr-4 mt-3">
                <a href="{{ route('departements.index') }}">{{ __('Back') }}</a>  
              </x-button>
        </div>
    </form>
    </x-create-card>
</x-app-layout>