@props(['type' => ''])
<a href="{{ request()->url() }}" class="block mb-2 ml-2"><x-heroicon-o-arrow-left class="inline w-6" />@lang('Back')</a>

<div class="mt-2 mb-4 max-w-xl mx-auto">
    <h1 class="text-3xl text-center">@lang('a::address.new')</h1>
    <x-forms::base :action="route('address.create')" :button="trans('a::address.save')">
        <input type="hidden" name="redirect" value="{{ request()->url() }}">

        <div>
            <label for="name" class="block text-xl text-left">Name:</label>
            <input type="text" id="name" name="name" class="input-text"
                placeholder="@lang('a::forms.placeholder.name')""
                    value="{{ old('name') ?? auth()->user()->full_name }}"
                required autocomplete="name">
            @error('name')
                <p class="error-msg"> {{ $message }}</p>
            @enderror
        </div>

        <div x-data="{ co: {{ old('co') ? 'true' : 'false'  }} }">
            <p class="pl-2 text-sm link" x-show="!co" @click="co = true"><x-heroicon-s-plus-circle
                    class="inline w-5 h-5 mb-1" /> c/o</p>
            <div x-show="co" x-cloak>
                <label for="co" class="block text-xl text-left"><x-heroicon-s-minus-circle
                        class="inline w-5 h-5 mb-1" @click="co = false" />c/o:</label>
                <input type="text" id="co" name="co" class="input-text"
                    value="{{ old('co') }}"
             placeholder="(Optional)">
                @error('co')
                    <p class="error-msg"> {{ $message }}</p>
                @enderror
            </div>
        </div>

        <div>
            <label for="line1" class="block text-xl text-left">@lang('a::address.line1'):</label>
            <input type="text" id="line1" name="line1" value="{{ old('line1') }}" class="input-text"
            placeholder="@lang('a::address.line1-placeholder')" required autocomplete="address-line1">
            @error('line1')
                <p class="error-msg"> {{ $message }}</p>
            @enderror
        </div>

        <div x-data="{ line2: {{ old('line2') ? 'true' : 'false'  }} }">
            <p class="pl-2 text-sm link" x-show="!line2" @click="line2 = true"><x-heroicon-s-plus-circle
                    class="inline w-5 h-5 mb-1" /> @lang('a::address..line2-label')</p>
            <div x-show="line2" x-cloack>
                <label for="line2" class="block text-xl text-left"><x-heroicon-s-minus-circle
                        class="inline w-5 h-5 mb-1 link" @click="line2 = false" />@lang('a::address.line2'):</label>
                <input type="text" id="line2" name="line2" class="input-text" value="{{ old('line2') }}"
                placeholder="(Optional)" autocomplete="address-line2">
                @error('line2')
                    <p class="error-msg"> {{ $message }}</p>
                @enderror
            </div>
        </div>

        <div class="grid grid-cols-4 gap-2">
            <div class="col-span-3 my-2">
                <label for="city" class="block text-xl text-left">@lang('a::address.city'):</label>
                <input type="text" id="city" name="city" value="{{ old('city') }}" class="input-text"
                placeholder="@lang('a::address.city')" required autocomplete="address-level2">
            </div>

            <div class="col-span-1 my-2">
                <label for="zip" class="block text-xl text-left">Plz:</label>
                <input type="text" maxlength="4" pattern="\d*" id="zip" name="zip" value="{{ old('zip') }}" class="input-text"
                placeholder="1234" required autocomplete="postal-code">
            </div>
        </div>
        @error('city')
            <p class="error-msg"> {{ $message }}</p>
        @enderror
        @error('zip')
            <p class="error-msg"> {{ $message }}</p>
        @enderror

        <div class="ml-4 py-4 flex flex-col gap-y-4 justify-around md:flex-row">
            <div class="flex items-center gap-x-2">
                <input type="checkbox" name="shipping" id="shipping" class="w-4 h-4 md:w-6 md:h-6"
                @checked( old('shipping') ?? ($type == 'shipping'))>
                <label for="shipping" class="text-xl">
                    <x-heroicon-o-truck class="w-6 h-6 md:w-8 md:h-8 inline mb-1" /> @lang('a::address.shipping')
                </label>
            </div>
            <div class="flex items-center gap-x-2">
                <input type="checkbox" name="billing" id="billing" class="w-4 h-4 md:w-6 md:h-6"
                @checked( old('billing') ?? ($type == 'billing'))>
                <label for="billing" class="text-xl">
                    <x-heroicon-o-clipboard-document-list class="w-6 h-6 md:w-8 md:h-8 inline mb-1" /> @lang('a::address.billing')
                </label>
            </div>
        </div>

    </x-form::base>

</div>