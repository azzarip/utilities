@props(['new' => 'false'])
<?php $string = $new ? 'new-password' : 'current-password'; ?>

<div>
    <label for="password" class="">Password:</label>
    <input type="password" id="password" name="password"
        class="input-text"
        placeholder="@lang("a::forms.placeholder.$string")" required autocomplete="{{ $string }}" />
        <input type="hidden" name="token" value="{{ request()->get('token') }}">
        <input type="hidden" name="uuid" value="{{ request()->get('uuid') }}">
    @error('password')
    <p class="error-msg">{{ $message }}</p>
    @enderror
</div>
