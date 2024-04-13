<x-azzarip::layouts.guest>
    <x-azzarip::authentication-card>
        <x-slot name="logo">
            <x-logo-vertical />
        </x-slot>

        <x-azzarip::validation-errors class="mb-4" />
        @session('status')
            <div class="mb-4 text-sm font-medium text-green-600 dark:text-green-400">
                {{ $value }}
            </div>
        @endsession

        <form method="POST" action="{{ route('login') }}">
            @csrf

            <div>
                <x-azzarip::label for="email" value="{{ __('Email') }}" />
                <x-azzarip::input id="email" class="block w-full mt-1" type="email" name="email" :value="old('email')" required
                    autofocus autocomplete="username" />
            </div>

            <div class="mt-4">
                <x-azzarip::label for="password" value="{{ __('Password') }}" />
                <x-azzarip::input id="password" class="block w-full mt-1" type="password" name="password" required
                    autocomplete="current-password" />
            </div>

            <div class="block mt-4">
                <label for="remember_me" class="flex items-center">
                    <x-azzarip::checkbox id="remember_me" name="remember" />
                    <span class="text-sm text-gray-600 ms-2 dark:text-gray-400">{{ __('Remember me') }}</span>
                </label>
            </div>

            <div class="flex items-center justify-end mt-4">
                @if (Route::has('password.request'))
                    <a class="text-sm text-gray-600 underline rounded-md dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800"
                        href="{{ route('password.request') }}">
                        {{ __('Forgot your password?') }}
                    </a>
                @endif

                <x-azzarip::button class="ms-4">
                    {{ __('Log in') }}
                </x-azzarip::button>
            </div>
        </form>
    </x-azzarip::authentication-card>
</x-azzarip::layouts.guest>
