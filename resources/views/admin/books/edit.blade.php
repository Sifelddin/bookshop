<x-app-layout>

    <x-slot name="header">
        <div class="flex justify-between">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
        <h2  class="font-semibold text-xl text-gray-800 leading-tight hover:underline">
           <a href="{{ route('books.index') }}">{{ __('Books List') }}</a> 
        </h2>
    </div>
    </x-slot>
<main class="w-10/12 mx-auto py-5">
  <!-- Validation Errors -->
  <x-auth-validation-errors class="mb-4" :errors="$errors" />

<form method="POST" action="{{ route('books.update',$Book) }}" enctype="multipart/form-data">
    @csrf
    @method('put')

    <div class="sm:grid grid-cols-2 gap-6">
        {{-- col-1 --}}
        <div>
            <!-- image -->
            <div class="border bottom-5 bg-white">
           <img class="md:w-7/12 mx-auto mt-5" src="{{ Storage::url('/books//' .$Book->book_photo) }}" alt="">
            </div>
            {{-- description --}}
            <div>
                <x-label for="description" :value="__('Description :')"/>
               <textarea class="w-full mx-auto mt-2"  id="description" cols="55" rows="12"  name="description" >{{$Book->book_description }}</textarea>
            </div>
        </div>
        {{-- col-2 --}}
         <div>

       
            {{--  category for the book --}}
            <div>
                 <x-label for="category" :value="__('Category')"/>
                 <x-select class="block mt-1 w-full" id="category" name='category'>
                     <option value="{{ $Book->category->cat_id }}">{{ $Book->category->cat_name }}</option> 
                       @foreach ($categories as $category)
                       <option value="{{ $category->cat_id }}">{{ $category->cat_name }}</option>  
                       @endforeach 
                   </x-select> 
            </div>
            {{--  supplier for the book --}}
            <div>
                <x-label for="supplier" :value="__('Supplier')" />
                <x-select class="block mt-1 w-full" id="supplier" name='supplier'>
                    <option value="{{ $Book->supplier->user_id }}">{{ $Book->supplier->user_firstname }} {{ $Book->supplier->user_lastname }}</option> 
                    @foreach ($suppliers as $supplier)
                    <option value="{{ $supplier->user_id }}">
                        {{ $supplier->user_firstname}}   {{ $supplier->user_lastname}}  </option>  
                    @endforeach
                </x-select> 
            </div>
                
                <!-- book's title -->
                
            <div class="mt-1">
                <x-label for="book_title" :value="__('Title')" />
                    
                 <x-input id="book_title" class="block mt-1 w-full" type="text" name="title" value="{{ $Book->book_title }}"  autofocus />
             </div>
                     <!-- Author -->
             <div class="mt-1">
                        <x-label for="author" :value="__('Author')" />
                        <x-input id="author" class="block mt-1 w-full" type="text" name="author" value="{{ $Book->book_author }}"  autofocus />
                      
                </div>
                     <!-- release date -->
                <div class="mt-4">
                    <x-label for="release" :value="__('Release date')" />
    
                    <x-input id="release" class="block mt-1 " type="date" name="release" value="{{ $Book->book_release }}"  />
                </div>
                    <!-- ISBN -->
                <div class="mt-4">
                    <x-label for="ISBN" :value="__('ISBN')" />
    
                    <x-input id="ISBN" class="block mt-1 w-full" type="text" name="ISBN" value="{{ $Book->ISBN }}"  />
                </div>
                {{-- price --}}
                <div>
                    <x-label for="price" :value="__('Price')" />
        
                    <x-input id="price" class="block mt-1 w-full" type="text" name="price"  value="{{ $Book->book_price }}"   autofocus  />
                </div>
                <div class="mt-1">
                    <x-label for="stock" :value="__('Stock')" />
                    <x-input id="stock" class="block mt-1 w-full" type="number" name="stock" value="{{ $Book->book_stock }}"  autofocus />
                </div>
                {{-- stock Alert --}}
                <div class="mt-1">
                    <x-label for="alert" :value="__('Stock Alert')" />
    
                    <x-input id="alert" class="block mt-1 w-full" type="number" name="alert" value="{{ $Book->book_stock_alert }}"  autofocus />
                </div>
                {{--book is published --}}
                <div class="mt-1 w-full">
                    <x-label for="published" :value="__('Is published')" />
                    <x-select class="mt-1 w-full" id="published" name="published">
                   @if ($Book->book_publish)
                   <option value="1">published</option>
                   <option value="0">not published</option>
                   @else
                   <option value="0">not published</option>
                   <option value="1">published</option>
                   @endif
                </x-select> 
                </div> 
                  {{-- photo --}}
                  <div class="mt-6">
                     <x-label for="photo" :value="__('Upload Photo')" />
                     <input id="photo" type="file" name="photo"   />
                 </div>        
            </div> 
              
        </div>
        <div class="my-3 w-full flex justify-around">
            <button class="hover:text-yellow-600 font-bold hover:bg-white p-2 px-3 rounded-md text-lg text-white bg-yellow-600" type="submit" >
                {{ __('Update') }}
            </button>
            <a class=" font-bold hover:text-black hover:bg-white p-2 px-3 rounded-md text-lg text-white bg-gray-700" href="{{ route('books.show',$Book) }}">  
                {{ __('Back') }}
            </a>
             </div>
</form>
</main>
    

</x-app-layout>