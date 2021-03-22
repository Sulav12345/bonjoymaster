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
            <!-- Select title -->
            <div class="mt-4">
                            <x-label for="role_id" value="{{ __('Title:') }}" />
                            <select name="role_id" class="block mt-1 w-full border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm">
                                <option value="user">Mr.</option>
                                <option value="agent">Ms.</option>
                            </select>
                        </div>

            <!-- Name -->
            <div>
                <x-label for="name" :value="__(' Full Name')" />

                <x-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus />
            </div>
                           <!-- Gender -->
                           <div class="mt-4">
                            <x-label for="role_id" value="{{ __('Gender:') }}" />
                            <select name="role_id" class="block mt-1 w-full border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm">
                                <option value="user">Male</option>
                                <option value="agent">Female</option>
                                <option value="agent">Other</option>

                            </select>
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
            <!-- date of birth -->
            <div class="mt-4">
            <x-label for="dob" value="{{ __('Date of birth:') }}" />
            <input type="date" name="date"> 
             <!-- date of birth -->
             <div class="mt-4">
            <x-label for="ph.no" value="{{ __('Phone no:') }}" />
            <input type="text" name="ph.no"> 

               
               
            <!-- Select Option Rol type -->
            <div class="mt-4">
                            <x-label for="role_id" value="{{ __('Register as:') }}" />
                            <select name="role_id" class="block mt-1 w-full border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm">
                                <option value="user">User</option>
                                <option value="agent">Agent</option>
                            </select>
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
