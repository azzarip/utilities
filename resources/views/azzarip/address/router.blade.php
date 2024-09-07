<div>
    @if ($mode == 'create')
        <x-forms::create-address :$type />
    @elseif($mode == 'edit')
        <x-forms::edit-address :$type :$address />
    @else
        @livewire('address-manager', ['backUrl' => $backUrl])
    @endif
</div>
