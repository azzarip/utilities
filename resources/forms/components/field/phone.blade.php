
<div id='phone_field'>
    <label for="tel" class="block">@lang('forms::phone'):</label>
    <input type="tel" name="tel" id="tel"
        class="w-full p-2 border border-gray-400 rounded-md"
        value="{{ old('tel') }}" autocomplete="tel-national">

    @error('phone')
        <p class="error-msg">{{ $message }}</p>
    @enderror
</div>

@section('scripts')
<script>
    const country_code = document.querySelector("#country_code");

    const input = document.querySelector("#tel");
    const iti = window.intlTelInput(input, {
        utilsScript: "https://cdn.jsdelivr.net/npm/intl-tel-input@24.0.1/build/js/utils.js",
        initialCountry: '{{ old('country_code') ?? 'ch' }}', // Use old value or fallback to 'ch'
        hiddenInput: function(telInputName) {
            return {
                phone: "phone",
                country: "country_code"
            };
        },
        preferredCountries: ['ch', 'de', 'at', 'it', 'fr'],
    });

    var form = input.closest('form');
    form.addEventListener('submit', function(event) {
        input.setCustomValidity('');

        console.log(iti.getValidationError());
        if (!iti.isValidNumber()) {
            input.setCustomValidity("@lang('validation.phone')");
            event.preventDefault();
            input.reportValidity();
        }
    });
</script>
@endsection

@section('head')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/intl-tel-input@24.0.1/build/css/intlTelInput.css">
    <script src="https://cdn.jsdelivr.net/npm/intl-tel-input@24.0.1/build/js/intlTelInput.min.js"></script>
@endsection
