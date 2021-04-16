<x-guest-layout>
    <x-auth-card>
        <x-slot name="logo">
            <a href="/">
                <x-application-logo class="w-20 h-20 fill-current text-gray-500" />
            </a>
        </x-slot>

        <!-- Session Status -->
        <x-auth-session-status class="mb-4" :status="session('status')" />

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <form method="POST" action="{{ route('login') }}">
            @csrf

            <!-- Email Address -->
            <div>
                <x-label for="email" :value="__('Email')" />

                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
            </div>

            <!-- Password -->
            <div class="mt-4">
                <x-label for="password" :value="__('Password')" />

                <x-input id="password" class="block mt-1 w-full"
                                type="password"
                                name="password"
                                required autocomplete="current-password" />
            </div>

                <!-- Remember Me -->
                <div class="block mt-4">
                <label for="remember_me" class="inline-flex items-center">
                    <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" name="remember">
                    <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                </label>
            </div>

            <div class="flex items-center justify-end mt-2">

                <x-button class="ml-3">
                 {{ __('Log in') }}
                </x-button>
            </div>

            <div class="mt-6 text-center">
            <p class="m-auto w-1/2 h-8 rounded-full bg-gray-400 text-xl mb-4 font-black" >Appelet</p>
            <table class="table-auto m-auto">
        
                <thead>
                <tr><th class="border-4 border-red-600 px-6 py-4">1st Appel</th>
                <th class="border-4 border-red-600 px-6 py-4">2nd Appel</th>
                <th class="border-4 border-red-600 px-6 py-4">3rd Appel</th>
                <th class="border-4 border-red-600 px-6 py-4">4th Appel</th> </tr>
                </thead>

                <tbody>
                 <tr>
                <td class="border-4 border-red-600 px-6 py-4">284</td>
                <td class="border-4 border-red-600 px-6 py-4">285</td>
                <td class="border-4 border-red-600 px-6 py-4">286</td>
                <td class="border-4 border-red-600 px-6 py-4">286</td>
                </tr>
                </tbody>

            </table>

            <table class="table-auto m-auto mt-4">
        
        <thead>
        <tr><th class="border-4 border-red-600 px-6 py-4">1st Adv Appel</th>
        <th class="border-4 border-red-600 px-6 py-4">2st Adv Appel</th>
        </thead>

        <tbody>
         <tr>
        <td class="border-4 border-red-600 px-6 py-4">284</td>
        <td class="border-4 border-red-600 px-6 py-4">285</td>
        </tr>
        </tbody>

     

    </table>

    <table class="table-auto m-auto mt-4">
        
        <thead>
        <tr><th class="border-4 border-red-600 px-6 py-4">Appel Mission</th>
        <th class="border-4 border-red-600 px-6 py-4">Appel Mission</th>
        </thead>

        <tbody>
         <tr>
        <td class="border-4 border-red-600 px-6 py-4">284</td>
        <td class="border-4 border-red-600 px-6 py-4">285</td>
        </tr>
        </tbody>

     

    </table>
            </div>

        
        </form>
    </x-auth-card>
</x-guest-layout>
