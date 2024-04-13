<x-azzarip::guest-layout>
    <x-azzarip::authentication-card>
        <x-azzarip::slot name="logo">
            <x-azzarip::authentication-card-logo />
        </x-azzarip::slot>

        <div class="mb-4 text-sm text-gray-600 dark:text-gray-400">
            {{ __('Forgot your password? No problem. Just let us know your email address and we will email you a password reset link that will allow you to choose a new one.') }}
        </div>

        @session('status')
            <div class="mb-4 font-medium text-sm text-green-600 dark:text-green-400">
                {{ $value }}
            </div>
        @endsession

        <x-azzarip::validation-errors class="mb-4" />

        <form method="POST" action="{{ route('password.email') }}">
            @csrf

            <div class="block">
                <x-azzarip::label for="email" value="{{ __('Email') }}" />
                <x-azzarip::input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
            </div>

            <div class="flex items-center justify-end mt-4">
                <x-azzarip::button>
                    {{ __('Email Password Reset Link') }}
                </x-azzarip::button>
            </div>
        </form>
    </x-azzarip::authentication-card>
</x-azzarip::guest-layout>
