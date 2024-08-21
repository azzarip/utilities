<div>
    <label for="first_name" class="">@lang('a::forms.label.first_name'):</label>
    <input type="text" id="first_name" name="first_name"
        class="input-text"
        placeholder="@lang('a::forms.placeholder.')"
        autocomplete="given-name"
        value="{{ old('first_name') }}" />
    @error('first_name')
        <p class="error-msg">{{ $message }}</p>
    @enderror
</div>
