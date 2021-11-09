
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>
    <div class="py-12"> 
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <br>
            <form method="POST" action="{{ route('users.update',$user) }}">
                @csrf
                @method('put')
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
                
                    </div>
                    {{-- col-2 --}}
                    <div>
                       
                         <div>
                            <x-label for="generalStatus" :value="__('General Status')"/>
                    
                            <x-input id="generalStatus" class="block mt-1 w-full" type="text" name="" value="{{ $g_status->status_name }}" readonly />
                        </div>
                        <div>
                            <x-label for="Status" :value="__('Status')"/>
                            <x-select class="w-full" name="status" id="Status">
                                <option value="{{ $user->status->status_id }}">{{ $user->status->status_name }}</option>
                                @foreach ($statuses as $status)
                                <option value="{{ $status->status_id }}">{{ $status->status_name }}</option>
                                @endforeach
                            </x-select>
                        </div> 
                        <!-- Departement -->
                        <div>
                            <x-label for="departement" :value="__('Departement')"/>
                            <x-select class="w-full" name="departement" id="departement">
                                @if ($departement == null)
                                <option value="">null</option>
                                @else
                                <option value="{{ $departement->dep_id }}">{{ $departement->dep_name }}</option>
                                @endif
                                @foreach ($departements as $dep)
                                <option value="{{ $dep->dep_id }}">{{ $dep->dep_name }}</option>
                                @endforeach
                            </x-select>
                        </div> 
                        <!-- Comercial id -->
                        <div>
                            <x-label for="Commercial" :value="__('Commercial ')"/>
                            <x-select class="w-full" name="commercial" id="Commercial">
                                @if ($commercial == null)
                                <option value="">null</option>
                                @else
                                <option value="{{ $user->user_commercial_id }}">{{ $commercial->user_firstname }} {{ $commercial->user_lastname }}</option>
                                @endif
                                @foreach ($employees as $employe)
                                <option value="{{ $employe->user_id }}">{{ $employe->user_firstname }} {{ $employe->user_lastname }}</option>
                                @endforeach
                            </x-select>
                        </div> 
                        {{-- coef --}}
                        <div class="mt-1">
                            <x-label for="Coefficient" :value="__('Coefficient')" />
            
                            <x-input id="Coefficient" class="block mt-1 w-full" type="number" name="coef" value="{{ $user->user_coef }}"  autofocus />
                        </div>
                        {{-- Role --}}
                        <div class="mt-1">
                            <x-label for="Role" :value="__('Role')" />
            
                            <x-input id="Role" class="block mt-1 w-full" type="text" name="role" value="{{ $user->user_role }}"  autofocus />
                        </div>
                        {{-- salary --}}
                        <div class="mt-1">
                            <x-label for="Salary" :value="__('Salary')" />
            
                            <x-input id="Salary" class="block mt-1 w-full" type="number" name="salary" value="{{ $user->user_salary }}"  autofocus />
                        </div>
                        {{-- Disabled --}}
                        <div class="mt-1">
                            <x-label for="Disabled" :value="__('Disabled')" />
            
                            <x-input id="Disabled" class="block mt-1 w-full" type="text" name="" value="{{ $user->disabled }}"  autofocus />
                        </div>
                  
                    </div>
    
                 </div> 
                 <div class="flex justify-between">
                    <x-button class="ml-4 mt-3">
                         {{ __('Update') }}
                     </x-button>
                    <x-button class="mr-4 mt-3">
                       <a href="{{ route('customers') }}">{{ __('Back') }}</a>  
                     </x-button>
         
                 </div>
                 
            </form>

  
            </div>
        </div>
        
    

</x-app-layout>