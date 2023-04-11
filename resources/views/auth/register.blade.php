<x-guest-layout>
    <form method="POST" action="{{ route('register') }}">
        @csrf

        <!-- Name -->
        <div>
            <x-input-label for="name" :value="__('Name')" />
            <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
        </div>
         <!-- adress -->
        <div>
            <x-input-label for="adress" :value="__('adress')" />
            <x-text-input id="adress" class="block mt-1 w-full" type="text" name="adress" :value="old('adress')" required autofocus autocomplete="adress" />
            <x-input-error :messages="$errors->get('adress')" class="mt-2" />
        </div>

        <div>
            <x-input-label for="numero" :value="__('numero')" />
            <x-text-input id="numero" class="block mt-1 w-full" type="numero"  name="numero" :value="old('numero')" required autofocus autocomplete="numero" />
            <x-input-error :messages="$errors->get('numero')" class="mt-2" />
        </div>

        <div>
            <x-input-label for="CIN" :value="__('CIN')" />
            <x-text-input id="CIN" class="block mt-1 w-full" type="text" name="CIN" :value="old('CIN')" required autofocus autocomplete="CIN" />
            <x-input-error :messages="$errors->get('CIN')" class="mt-2" />
        </div>
        <x-text-input id="etat" class="block mt-1 w-full" type="hidden" name="etat" value="active" required autofocus autocomplete="active" />
        <x-text-input id="role" class="block mt-1 w-full" type="hidden" name="role" value="user" required autofocus autocomplete="user" />


        <!-- Email Address -->
        <div class="mt-4">
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />

            <x-text-input id="password" class="block mt-1 w-full"
                            type="password"
                            name="password"
                            required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Confirm Password -->
        <div class="mt-4">
            <x-input-label for="password_confirmation" :value="__('Confirm Password')" />

            <x-text-input id="password_confirmation" class="block mt-1 w-full"
                            type="password"
                            name="password_confirmation" required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
        </div>

        <div class="flex items-center justify-end mt-4">
            <a class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800" href="{{ route('login') }}">
                {{ __('Already registered?') }}
            </a>

            <x-primary-button class="ml-4">
                {{ __('Register') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout>
