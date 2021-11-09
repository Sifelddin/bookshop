<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Updating The Category') }}
        </h2>
    </x-slot>
  
    <x-create-card>
        <x-auth-validation-errors class="mb-4" :errors="$errors" />
    <form method="POST" action="{{ route('categories.update',$category) }}">
        @csrf
        @method('put')
 
        <div>
            <x-label for="CategoryName"/>
            <x-input id="CategoryName" class="block mt-1 w-full" type="text" name="categoryName" value="{{ $category->cat_name }}" required autofocus />
        </div>
        <br>
        <div>
            <x-label for="CategoryParent" :value="__('Category Parent :')" />
            <x-select class="w-full" id="CategoryParent" name="category_parent">
                @foreach ($cat_parent as $value)
                <option value="{{ $value->cat_id }}">{{ $value->cat_name }}</option>
                @endforeach
                <option value="">NULL</option>
                @foreach ($categories as $category)
                    <option value="{{ $category->cat_id }}"> {{ $category->cat_name }}</option>
                @endforeach
            </x-select>
     </div> 
     <div class="flex justify-between">
           <x-button class="ml-4 mt-3">
                {{ __('Update') }}
            </x-button>
           <x-button class="mr-4 mt-3">
              <a href="{{ route('categories.index') }}">{{ __('Back') }}</a>  
            </x-button>

        </div>
    </form>
    </x-create-card>
</x-app-layout>