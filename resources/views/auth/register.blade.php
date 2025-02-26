<x-guest-layout>
    <form method="POST" action="{{ route('register') }}">
        @csrf

        <!-- Name -->
        <div>
            <x-input-label for="name" :value="__('Name')" />
            <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
        </div>

        <!-- Email Address -->
        <div class="mt-4">
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />
            <x-text-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="new-password" />
            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Confirm Password -->
        <div class="mt-4">
            <x-input-label for="password_confirmation" :value="__('Confirm Password')" />
            <x-text-input id="password_confirmation" class="block mt-1 w-full" type="password" name="password_confirmation" required autocomplete="new-password" />
            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
        </div>

        <!-- Salary -->
        <div class="mt-4">
            <x-input-label for="salary" :value="__('Salary')" />
            <x-text-input id="salary" class="block mt-1 w-full" type="number" step="0.01" name="salaire" :value="old('salaire')" required />
            <x-input-error :messages="$errors->get('salary')" class="mt-2" />
        </div>

        <!-- Credit Date -->
        <div class="mt-4">
            <x-input-label for="credit_date" :value="__(' day Credit Date')" />
            <x-text-input id="credit_date" class="block mt-1 w-full" type="number" name="dateCreditSalaire" :value="old('dateCreditSalaire')" required />
            <x-input-error :messages="$errors->get('credit_date')" class="mt-2" />
        </div> 
        <!-- <div class="mt-4">
        <x-input-label for="role" :value="__('role')" />
        <select name="role" class="block mt-1 w-full border-gray-300 rounded-md shadow-sm">
        <option value=""></option>    
    <option value="user">utilisateur</option>
   
</select>
</div> -->

        <div class="flex items-center justify-end mt-4">
            <a class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800" href="{{ route('login') }}">
                {{ __('Already registered?') }}
            </a>

            <x-primary-button class="ms-4">
                {{ __('Register') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout>
