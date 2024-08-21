<div>
<h1 class="mb-4 text-3xl leading-normal text-center text-black">@lang('a::auth.title.reset')</h1>

<form action="{{ route('password.reset') }}" method="POST">
    @csrf
    <div class="space-y-4">
        <p class="text-center">@lang('a::auth.message.reset')</p>
        <x-forms::field.password new=true />
        <div class="pt-4">
            <button type="submit" class="block w-full max-w-lg py-3 mx-auto text-2xl big-button">@lang('a::auth.button.reset')
            </button>
        </div>
    </div>
</form>
</div>
