<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Updating The User status') }}
        </h2>
    </x-slot>
  
    <x-create-card>
        <x-auth-validation-errors class="mb-4" :errors="$errors" />
    <form method="POST" action="{{ route('userstatuses.update',$status) }}">
        @csrf
        @method('put')
        <div>
            <x-label for="statusName"/>
            <x-input id="statusName" class="block mt-1 w-full" type="text" name="statusName" value="{{ $status->status_name }}" required autofocus />
        </div>
        <br>
        <div>
            <x-label for="GeneralStatus" :value="__('General Status :')" />
            <x-select class="w-full" id="GeneralStatus" name="generalStatus">
                @foreach ($g_status as $value)
                <option value="{{ $value->status_id }}">{{ $value->status_name }}</option>        
                @endforeach
                <option value="">NULL</option>
                @foreach ($g_statuses as $genaral)
                    <option value="{{ $genaral->status_id }}"> {{ $genaral->status_name }}</option>
                @endforeach
            </x-select>
     </div> 
     <div class="flex justify-between">
           <x-button class="ml-4 mt-3">
                {{ __('Update') }}
            </x-button>
           <x-button class="mr-4 mt-3">
              <a href="{{ route('userstatuses.index') }}">{{ __('Back') }}</a>  
            </x-button>

        </div>
    </form>
    </x-create-card>
</x-app-layout>