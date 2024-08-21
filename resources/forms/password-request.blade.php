<div>
    <h1 class="text-3xl leading-normal text-center text-black">Reset Password</h1>

    <form action="{{ route('password.request') }}" method="POST">
        @csrf
        <div class="pt-4 space-y-4">
            @error('token')
                <p class="px-2 py-1 text-black bg-red-300 rounded-xl"><x-heroicon-o-exclamation-triangle class="inline w-6 aspect-auto" />
                    {{ $message }}</p>
            @enderror

            <x-forms::field.email />

            <p>@lang('a::auth.message.request')</p>
            <div class="pt-4">
                <button type="submit" class="block w-full max-w-lg py-3 mx-auto text-2xl big-button"> Reset Password
                </button>
            </div>
        </div>
    </form>
    <a class="block mt-4 text-center underline cursor-pointer" href={{ route('login') }}>@lang('a::auth.link.back')</a>
</div>
