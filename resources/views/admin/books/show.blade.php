<x-app-layout>

    <x-slot name="header">
        <div class="flex justify-between">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
        <h2 class="font-semibold text-xl text-gray-800"> book's details</h2>
    </div>
    </x-slot>
<main class="w-10/12 mx-auto py-3">
<div class="m-4 flex justify-around ">
<form method="POST" action="{{ route('books.destroy',$Book) }}">
    @csrf
    @method('delete')
    <div class="my-3 w-full flex justify-around">
        <button class="hover:text-red-600 font-bold hover:bg-white p-1 px-3 rounded-md text-lg text-white bg-red-600" type="submit" >
            {{ __('Delete') }}
        </button>
     </div>
</form>

<a class="hover:text-yellow-600 font-bold hover:bg-white p-2 px-3 rounded-md text-lg text-white bg-yellow-600 self-center"
href="{{ route('books.edit',$Book) }}">  
{{ __('Edit') }}
</a>
<a class="font-bold hover:text-black hover:bg-white p-2 px-3 rounded-md text-lg text-white bg-gray-700 self-center"
 href="{{ route('books.index') }}">  
    {{ __('Back') }}
</a>
</div>

<form method="POST" action="">
    @csrf
    <div class="sm:grid grid-cols-2 gap-4 ">
        {{-- col-1 --}}
        <div>
            <!-- image -->
            <div class="">
           <img class="md:w-7/12 mx-auto mt-5" src="{{ Storage::url('/books//' .$Book->book_photo) }}" alt="">
            </div>
            {{-- description --}}
            <div>
                <x-label for="description" :value="__('Description')"/>
               <textarea  id="description" cols="55" rows="15" readonly >{{ $Book->book_description }}</textarea>
            </div>
        </div>
        {{-- col-2 --}}
        <div>

       
            {{--  category for the book --}}
            <div>
                 <x-label for="category" :value="__('Category')"/>
                <x-input class="block mt-1 w-full" id="category" type="text"  value="{{ $Book->category->cat_name }}" readonly />
            </div>
            {{--  supplier for the book --}}
            <div>
                <x-label for="supplier" :value="__('Supplier')" />
                <x-input class="block mt-1 w-full" id="supplier" type="text"  value="{{ $Book->supplier->user_firstname }}" readonly /> 
            </div>
                
                <!-- book's title -->
                
            <div class="mt-1">
                <x-label for="book_title" :value="__('Title')" />
                    
                 <x-input id="book_title" class="block mt-1 w-full" type="text" name="title" value="{{ $Book->book_title }}" readonly autofocus />
             </div>
                     <!-- Author -->
             <div class="mt-1">
                        <x-label for="author" :value="__('Author')" />
                        <x-input id="author" class="block mt-1 w-full" type="text" name="author" value="{{ $Book->book_author }}" readonly autofocus />
                      
                </div>
                     <!-- release date -->
                <div class="mt-4">
                    <x-label for="release" :value="__('Release date')" />
    
                    <x-input id="release" class="block mt-1 " type="date" name="release" value="{{ $Book->book_release }}"  readonly/>
                </div>
                    <!-- ISBN -->
                <div class="mt-4">
                    <x-label for="ISBN" :value="__('ISBN')" />
    
                    <x-input id="ISBN" class="block mt-1 w-full" type="text" name="ISBN" value="{{ $Book->ISBN }}" readonly />
                </div>
                {{-- price --}}
                <div>
                    <x-label for="price" :value="__('Price')" />
        
                    <x-input id="price" class="block mt-1 w-full" type="text" name="price"  value="{{ $Book->book_price }}" readonly  autofocus  />
                </div>
                <div>
                    <x-label for="price" :value="__('Price')" />
        
                    <x-input id="price" class="block mt-1 w-full" type="text" name="price"  value="{{ $Book->book_price }}" readonly  autofocus  />
                </div>
                <div>
                    <x-label for="create-date" :value="__('Create date')" />
        
                    <x-input id="create-date" class="block mt-1 w-full" type="text" value="{{ $Book->created_at }}" readonly  autofocus  />
                </div>
                <div class="mt-1">
                    <x-label for="stock" :value="__('Stock')" />
                    <x-input id="stock" class="block mt-1 w-full" type="number" value="{{ $Book->book_stock }}" readonly autofocus />
                </div>
                {{-- stock Alert --}}
                <div class="mt-1">
                    <x-label for="alert" :value="__('Stock Alert')" />
    
                    <x-input id="alert" class="block mt-1 w-full" type="number" value="{{ $Book->book_stock_alert }}" readonly autofocus />
                </div>
                {{--book is published --}}
                <div class="mt-1 w-full">
                    <x-label for="published" :value="__('Is published')" />
                   @if ($Book->book_publish)
                   <x-input id="published" class="block mt-1 w-full" type="text"  value="published" readonly autofocus />
                   @else
                   <x-input id="published" class="block mt-1 w-full" type="text"   value="not published" readonly autofocus />
                   @endif
           
                </div> 
                <div>
                    <x-label for="update-date" :value="__('Update date')" />
        
                    <x-input id="update-date" class="block mt-1 w-full" type="text" value="{{ $Book->created_at }}" readonly  autofocus  />
                </div>
        </div>
      
     </div> 
</form>
</main>
    

</x-app-layout>