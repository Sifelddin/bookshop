<x-guest-layout>
    <x-auth-card>
        <x-slot name="logo">
            <a href="/">
                <x-application-logo class="w-20 h-20 fill-current text-gray-500" />
            </a>
        </x-slot>

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <form method="POST" action="{{ route('register') }}">
            @csrf

            <!-- firstname -->
            <div>
                <x-label for="Firstname" :value="__('Firstname')" />

                <x-input id="Firstname" class="block mt-1 w-full" type="text" name="firstname" :value="old('firstname')" required autofocus />
            </div>

            <!-- lastname -->

            <div class="mt-1">
                <x-label for="Lastname" :value="__('Lastname')" />

                <x-input id="Lastname" class="block mt-1 w-full" type="text" name="lastname" :value="old('lastname')" required autofocus />
            </div>
            <!-- address -->

            <div class="mt-1">
                <x-label for="Address" :value="__('Address')" />

                <x-input id="Address" class="block mt-1 w-full" type="text" name="address" :value="old('address')" required autofocus />
                <!-- zipcode -->
                <div class="flex mt-2">
                    <div>
                    <x-label for="Zipcode" :value="__('Zipcode')" />
                    <x-input id="Zipcode" class="w-5/12 mt-1 " type="text" name="zipcode" :value="old('zipcode')" required autofocus/>
                    </div>
                    <!-- city -->
                    <div>
                    <x-label for="City" :value="__('City')" />
                    <x-input id="City" class=" mt-1 " type="text" name="city" :value="old('city')" required autofocus/>
                    </div>
                </div>
            </div>
         <!-- Email Address -->
            <div class="mt-4">
                <x-label for="phone" :value="__('Phone')" />

                <x-input id="phone" class="block mt-1 " type="text" name="phone" :value="old('phone')" required />
            </div>
                <!-- Email Address -->
            <div class="mt-4">
                <x-label for="email" :value="__('Email')" />

                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required />
            </div>

            <!-- Password -->
            <div class="mt-4">
                <x-label for="password" :value="__('Password')" />

                <x-input id="password" class="block mt-1 w-full"
                                type="password"
                                name="password"
                                required autocomplete="new-password" />
            </div>

            <!-- Confirm Password -->
            <div class="mt-4">
                <x-label for="password_confirmation" :value="__('Confirm Password')" />

                <x-input id="password_confirmation" class="block mt-1 w-full"
                                type="password"
                                name="password_confirmation" required />
            </div>

            <div class="flex items-center justify-end mt-4">
                <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                    {{ __('Already registered?') }}
                </a>

                <x-button class="ml-4">
                    {{ __('Register') }}
                </x-button>
            </div>
        </form>
    </x-auth-card>
</x-guest-layout>
