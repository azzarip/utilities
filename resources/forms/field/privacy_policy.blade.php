<div style="padding-top: 4px;">
    @error('privacy_policy')
        <p class="error-msg">{{ $message }}</p>
    @enderror
    <input type="checkbox" name="privacy_policy" id="privacy_policy" @checked(old('privacy_policy'))>
    <label for="privacy_policy" class="pl-2 text-sm">{!! trans('forms.privacy_policy', ['link' => '<a href="/privacy-policy"
        class="inline-link">Privacy Policy</a>']) !!} .</label>
</div>
