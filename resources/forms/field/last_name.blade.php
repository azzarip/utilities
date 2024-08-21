<div>
    <label for="last_name" class="">@lang('a::forms.label.last_name'):</label>
    <input type="text" id="last_name" name="last_name"
        class="input-text"
        placeholder="@lang('a::forms.placeholder.last-name')"
        autocomplete="family-name"
        value="{{ old('last_name') }}" />
    @error('last_name')
        <p class="error-msg">{{ $message }}</p>
    @enderror
</div>
