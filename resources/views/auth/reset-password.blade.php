<x-azzarip::guest-layout>
    <x-azzarip::authentication-card>
        <x-azzarip::slot name="logo">
            <x-azzarip::authentication-card-logo />
        </x-azzarip::slot>

        <x-azzarip::validation-errors class="mb-4" />

        <form method="POST" action="{{ route('password.update') }}">
            @csrf

            <input type="hidden" name="token" value="{{ $request->route('token') }}">

            <div class="block">
                <x-azzarip::label for="email" value="{{ __('Email') }}" />
                <x-azzarip::input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email', $request->email)" required autofocus autocomplete="username" />
            </div>

            <div class="mt-4">
                <x-azzarip::label for="password" value="{{ __('Password') }}" />
                <x-azzarip::input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="new-password" />
            </div>

            <div class="mt-4">
                <x-azzarip::label for="password_confirmation" value="{{ __('Confirm Password') }}" />
                <x-azzarip::input id="password_confirmation" class="block mt-1 w-full" type="password" name="password_confirmation" required autocomplete="new-password" />
            </div>

            <div class="flex items-center justify-end mt-4">
                <x-azzarip::button>
                    {{ __('Reset Password') }}
                </x-azzarip::button>
            </div>
        </form>
    </x-azzarip::authentication-card>
</x-azzarip::guest-layout>
