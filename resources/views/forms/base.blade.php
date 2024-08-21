@props(['button', 'action'])
<style> .space-y-4 > * + * { margin-top: 1rem; }</style>

<form action="{{ $action }}" method="POST">
    @csrf
    <div class="space-y-4">
        {{ $slot }}
    </div>
    <div style="padding-top: 1rem;">
        <button type="submit" class="form-button">{{ $button }}</button>
    </div>
</form>
