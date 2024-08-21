<div>
    <label for="email" class="">Email:</label>
    <input type="text" id="email" name="email"
        class="input-text"
        placeholder="@lang('a::forms.placeholder.email')" autocomplete="email" value="{{ old('email') }}" />
    @error('email')
        <p class="error-msg">{{ $message }}</p>
    @enderror
</div>
