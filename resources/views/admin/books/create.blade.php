<x-app-layout>

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>
<main class="w-10/12 mx-auto">
<div class="m-4">
<h1 class="font-bold text-xl"> Create a new Book</h1>
</div>

  <!-- Validation Errors -->
  <x-auth-validation-errors class="mb-4" :errors="$errors" />

<form method="POST" action="{{ route('books.store') }}" enctype="multipart/form-data">
    @csrf
    <div class="grid grid-cols-2 gap-4">
        {{-- col-1 --}}
        <div>

       
            {{-- select a category for the book --}}
            <div>
                 <x-label for="category" :value="__('Category')"/>
              <x-select class="block mt-1 w-full" id="category" name='category'>
                  <option value="">select a category</option> 
                    @foreach ($categories as $category)
                    <option value="{{ $category->cat_id }}">{{ $category->cat_name }}</option>  
                    @endforeach 
                </x-select>  
            </div>
            {{-- select a supplier for the book --}}
            <div>
                <x-label for="supplier" :value="__('Supplier')" />
                <x-select class="block mt-1 w-full" id="supplier" name='supplier'>
                    <option value="">select a supplier</option> 
                    @foreach ($suppliers as $supplier)
                    <option value="{{ $supplier->user_id }}">
                        {{ $supplier->user_firstname}}   {{ $supplier->user_lastname}}  </option>  
                    @endforeach
                </x-select>    
            </div>
                
                <!-- book's title -->
                
            <div class="mt-1">
                <x-label for="book_title" :value="__('Title')" />
                    
                 <x-input id="book_title" class="block mt-1 w-full" type="text" name="title"  autofocus />
             </div>
                     <!-- Author -->
             <div class="mt-1">
                        <x-label for="author" :value="__('Author')" />
                        <x-input id="author" class="block mt-1 w-full" type="text" name="author"   autofocus />
                      
                </div>
                     <!-- release date -->
                <div class="mt-4">
                    <x-label for="release" :value="__('Release date')" />
    
                    <x-input id="release" class="block mt-1 " type="date" name="release"   />
                </div>
                    <!-- ISBN -->
                <div class="mt-4">
                    <x-label for="ISBN" :value="__('ISBN')" />
    
                    <x-input id="ISBN" class="block mt-1 w-full" type="text" name="ISBN"   />
                </div>
                {{-- price --}}
                <div>
                    <x-label for="price" :value="__('Price')" />
        
                    <x-input id="price" class="block mt-1 w-full" type="text" name="price"    autofocus  />
                </div>
        </div>
        {{-- col-2 --}}
        <div>
            {{-- description --}}
            <div>
                <x-label for="description" :value="__('Description')"/>
               <textarea name="description" id="description" cols="60" rows="10">description</textarea>
            </div>
            <!-- stock -->
            <div class="mt-1">
                <x-label for="stock" :value="__('Stock')" />
                <x-input id="stock" class="block mt-1 w-full" type="number" name="stock"   autofocus />
            </div>
            {{-- stock Alert --}}
            <div class="mt-1">
                <x-label for="alert" :value="__('Stock Alert')" />

                <x-input id="alert" class="block mt-1 w-full" type="number" name="alert"   autofocus />
            </div>
            {{--book is published --}}
            <div class="mt-1 w-full">
                <x-label for="published" :value="__('Is published')" />
                <x-select class="mt-1 w-full" id="published" name="published">
                    <option value="1">published</option>
                    <option value="0">not published</option>
                </x-select>         
            </div> 
            {{-- photo --}}
            <div class="mt-6">
                <x-label for="photo" :value="__('Upload Photo')" />
                <input class="cursor-pointer" id="photo" class="block mt-1 w-full" type="file" name="photo" eccept="image/jpg"   />
            </div>        
        </div>
     </div> 
    <div class="mx-auto">
     <button class="text-lg p-2 bg-green-500 mb-10 mt-3 text-white rounded-md mx-auto" name="submit" type="submit">
         Create
     </button>
    </div>
</form>
</main>
    

</x-app-layout>