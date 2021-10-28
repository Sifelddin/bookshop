<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Creating a new User Status') }}
        </h2>
    </x-slot>
    
    <x-create-card>
        <x-auth-validation-errors class="mb-4" :errors="$errors" />
    <form method="POST" action="{{ route('userstatuses.store') }}">
        @csrf
        
        <div>
            <x-label for="statusName" :value="__('status\'s Name')" />
            <x-input id="statusName" class="block mt-1 w-full" type="text" name="statusName" :value="old('statusName')" required autofocus />
        </div>
        <div>
            <x-label for="GeneralStatus" :value="__('GeneralStatus')" />
            <x-select class="w-full" id="GeneralStatus" name="General_status">
                <option value="">--you can choose a General Status--</option>
                @foreach ($g_statuses as $status)
                    <option value="{{ $status->status_id }}"> {{ $status->status_name }}</option>
                @endforeach
                <option value="">NULL</option>
            </x-select>
        </div>
        <div class="flex justify-between">
           <x-button class="ml-4 mt-3">
                {{ __('Create') }}
            </x-button>
            <x-button class="mr-4 mt-3">
                <a href="{{ route('userstatuses.index') }}">{{ __('Back') }}</a>  
              </x-button>
        </div>
    </form>
    </x-create-card>
</x-app-layout>