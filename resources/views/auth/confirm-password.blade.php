<x-azzarip::guest-layout>
    <x-azzarip::authentication-card>
        <x-azzarip::slot name="logo">
            <x-azzarip::authentication-card-logo />
        </x-azzarip::slot>

        <div class="mb-4 text-sm text-gray-600 dark:text-gray-400">
            {{ __('This is a secure area of the application. Please confirm your password before continuing.') }}
        </div>

        <x-azzarip::validation-errors class="mb-4" />

        <form method="POST" action="{{ route('password.confirm') }}">
            @csrf

            <div>
                <x-azzarip::label for="password" value="{{ __('Password') }}" />
                <x-azzarip::input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="current-password" autofocus />
            </div>

            <div class="flex justify-end mt-4">
                <x-azzarip::button class="ms-4">
                    {{ __('Confirm') }}
                </x-azzarip::button>
            </div>
        </form>
    </x-azzarip::authentication-card>
</x-azzarip::guest-layout>
