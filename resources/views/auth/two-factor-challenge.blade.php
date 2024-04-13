<x-azzarip::guest-layout>
    <x-azzarip::authentication-card>
        <x-azzarip::slot name="logo">
            <x-azzarip::authentication-card-logo />
        </x-azzarip::slot>

        <div x-data="{ recovery: false }">
            <div class="mb-4 text-sm text-gray-600 dark:text-gray-400" x-azzarip::show="! recovery">
                {{ __('Please confirm access to your account by entering the authentication code provided by your authenticator application.') }}
            </div>

            <div class="mb-4 text-sm text-gray-600 dark:text-gray-400" x-azzarip::cloak x-azzarip::show="recovery">
                {{ __('Please confirm access to your account by entering one of your emergency recovery codes.') }}
            </div>

            <x-azzarip::validation-errors class="mb-4" />

            <form method="POST" action="{{ route('two-factor.login') }}">
                @csrf

                <div class="mt-4" x-azzarip::show="! recovery">
                    <x-azzarip::label for="code" value="{{ __('Code') }}" />
                    <x-azzarip::input id="code" class="block mt-1 w-full" type="text" inputmode="numeric" name="code" autofocus x-azzarip::ref="code" autocomplete="one-time-code" />
                </div>

                <div class="mt-4" x-azzarip::cloak x-azzarip::show="recovery">
                    <x-azzarip::label for="recovery_code" value="{{ __('Recovery Code') }}" />
                    <x-azzarip::input id="recovery_code" class="block mt-1 w-full" type="text" name="recovery_code" x-azzarip::ref="recovery_code" autocomplete="one-time-code" />
                </div>

                <div class="flex items-center justify-end mt-4">
                    <button type="button" class="text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 underline cursor-pointer"
                                    x-azzarip::show="! recovery"
                                    x-azzarip::on:click="
                                        recovery = true;
                                        $nextTick(() => { $refs.recovery_code.focus() })
                                    ">
                        {{ __('Use a recovery code') }}
                    </button>

                    <button type="button" class="text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 underline cursor-pointer"
                                    x-azzarip::cloak
                                    x-azzarip::show="recovery"
                                    x-azzarip::on:click="
                                        recovery = false;
                                        $nextTick(() => { $refs.code.focus() })
                                    ">
                        {{ __('Use an authentication code') }}
                    </button>

                    <x-azzarip::button class="ms-4">
                        {{ __('Log in') }}
                    </x-azzarip::button>
                </div>
            </form>
        </div>
    </x-azzarip::authentication-card>
</x-azzarip::guest-layout>
