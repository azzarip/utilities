@props(['id', 'autocomplete' => ''])
<div>
    <label for="{{ $id }}" class="">@lang('forms.label.' . $id):</label>
    <input type="text" id="{{ $id }}" name="{{ $id }}"
        class="input-text"
        placeholder="@lang('forms.placeholder.' . $id)"
        @if($autocomplete) autocomplete="{{ $autocomplete }}" @endif
        value="{{ old('{{ $id }}') }}" />
    @error('{{ $id }}')
        <p class="error-msg">{{ $message }}</p>
    @enderror
</div>
