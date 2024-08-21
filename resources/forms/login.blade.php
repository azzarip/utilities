<div>
    <h1 class="mb-2 text-3xl leading-normal text-center text-black">@lang('login')</h1>

    <form action="{{ route('login') }}" method="POST">
        @csrf
        <div class="space-y-4">
            @error('failed')
            <p class="px-2 py-1 text-black rounded-xl" style="background-color: #fca5a5;"><x-heroicon-o-exclamation-triangle class="inline w-6 aspect-auto" />
                @lang('a::auth.failed')</p>
            @enderror

            @if(session()->has('info'))
            <p class="px-2 py-1 text-black rounded-xl" style="background-color: #86efac;"><x-heroicon-o-information-circle class="inline w-6 aspect-auto" />
                {{ session('info') }}</p>
            @endif
            <div>

            <x-form::field.email />

            <x-form::field.password />

            <div class="pt-4">
                <button type="submit" class="block w-full max-w-lg py-3 mx-auto text-2xl big-button"> @lang('login')
                </button>
            </div>
        </div>
    </form>
    <a class="block mt-4 text-center underline cursor-pointer" href={{ route('password.request') }}>@lang('a::auth.link.forgot')?</a>
</div>
