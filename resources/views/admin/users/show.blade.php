<x-app-layout>

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12"> 
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="mx-auto text-center">
                <a class="border-2 p-2 rounded-md bg-yellow-500 font-bold hover:bg-white hover:text-yellow-500 " href="{{ route('users.edit',$user) }}"> UPDATE PAGE </a>
            </div>
            <br>
            <form method="POST" action="">
                @csrf
                <div class="grid grid-cols-2 gap-4">
                    {{-- col-1 --}}
                    <div>

                        <!-- User ID -->
                        <div>
                            <x-label for="ID" :value="__('ID')" />
                            
                            <x-input id="ID" class="block mt-1 w-full" type="text" name="" value="{{ $user->user_id }}"  readonly autofocus  />
                        </div>
                        <!-- firstname -->
                        <div>
                            <x-label for="Firstname" :value="__('Firstname')" />
                            
                            <x-input id="Firstname" class="block mt-1 w-full" type="text" name="" value="{{ $user->user_firstname }}"  readonly autofocus  />
                        </div>
                            
                            <!-- lastname -->
                            
                        <div class="mt-1">
                            <x-label for="Lastname" :value="__('Lastname')" />
                                
                             <x-input id="Lastname" class="block mt-1 w-full" type="text" name="" value="{{ $user->user_lastname }}" readonly autofocus />
                         </div>
                                 <!-- address -->
                         <div class="mt-1">
                                    <x-label for="Address" :value="__('Address')" />
                    
                                    <x-input id="Address" class="block mt-1 w-full" type="text" name="" value="{{ $user->user_address }}" readonly autofocus />
                                    <!-- zipcode -->
                                    <div class="flex mt-2">
                                        <div>
                                        <x-label for="Zipcode" :value="__('Zipcode')" />
                                        <x-input id="Zipcode" class="w-5/12 mt-1 " type="text" name="" value="{{ $user->user_zipcode }}" readonly autofocus/>
                                        </div>
                                        <!-- city -->
                                        <div>
                                        <x-label for="City" :value="__('City')" />
                                        <x-input id="City" class=" mt-1 " type="text" name="" value="{{ $user->user_city }}" readonly autofocus/>
                                        </div>
                                    </div>
                            </div>
                                 <!-- Email Address -->
                            <div class="mt-4">
                                <x-label for="phone" :value="__('Phone')" />
                
                                <x-input id="phone" class="block mt-1 " type="text" name="" value="{{ $user->user_phone }}" readonly />
                            </div>
                                <!-- Email Address -->
                            <div class="mt-4">
                                <x-label for="email" :value="__('Email')" />
                
                                <x-input id="email" class="block mt-1 w-full" type="email" name="" value="{{ $user->email }}" readonly />
                            </div>
                            <div class="mt-4">
                                <x-label for="Enregistring" :value="__('Enregistring date')" />
                
                                <x-input id="Enregistring" class="block mt-1 w-full" type="text" name="" value="{{ $user->created_at }}" readonly />
                            </div>
                            
                        
                    </div>
                    {{-- col-2 --}}
                    <div>
                        {{-- General status --}}
                        <div>
                            <x-label for="Status" :value="__('General Status')" />
            
                            <x-input id="Status" class="block mt-1 w-full" type="text" name="" value="{{ $g_status->status_name }}"  readonly autofocus  />
                        </div>
                        {{-- Status --}}
                        <div>
                            <x-label for="Status" :value="__('Status')"/>
            
                            <x-input id="Status" class="block mt-1 w-full" type="text" name="" value="{{ $user->status->status_name }}"  readonly autofocus  />
                        </div>
            
                        <!-- Departement -->
                        <div class="mt-1">
                            <x-label for="Departement" :value="__('Departement')" />
            
                            <x-input id="Departement" class="block mt-1 w-full" type="text" name="" value="{{ $user->user_dep_id }}" readonly autofocus />
                        </div>
                        <!-- Comercial id -->
                        <div class="mt-1">
                            <x-label for="Commercial" :value="__('Commercial_id')" />
            
                            <x-input id="Commercial" class="block mt-1 w-full" type="text" name="" value="{{ $user->user_commercial_id }}" readonly autofocus />
                        </div>
                        {{-- coef --}}
                        <div class="mt-1">
                            <x-label for="Coefficient" :value="__('Coefficient')" />
            
                            <x-input id="Coefficient" class="block mt-1 w-full" type="text" name="" value="{{ $user->user_coef }}" readonly autofocus />
                        </div>
                        {{-- Role --}}
                        <div class="mt-1">
                            <x-label for="Role" :value="__('Role')" />
            
                            <x-input id="Role" class="block mt-1 w-full" type="text" name="" value="{{ $user->user_role }}" readonly autofocus />
                        </div>
                        {{-- salary --}}
                        <div class="mt-1">
                            <x-label for="Salary" :value="__('Salary')" />
            
                            <x-input id="Salary" class="block mt-1 w-full" type="text" name="" value="{{ $user->user_salary }}" readonly autofocus />
                        </div>
                        {{-- Disabled --}}
                        <div class="mt-1">
                            <x-label for="Disabled" :value="__('Disabled')" />
            
                            <x-input id="Disabled" class="block mt-1 w-full" type="text" name="" value="{{ $user->disabled }}" readonly autofocus />
                        </div>
                        <div class="mt-4">
                            <x-label for="Updating" :value="__('Updating date')" />
            
                            <x-input id="Updating" class="block mt-1 w-full" type="text" name="" value="{{ $user->updated_at }}" readonly />
                        </div>
                    </div>
    
                 </div> 
            </form>

  
            </div>
        </div>
        
    </div>

</x-app-layout>