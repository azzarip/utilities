<?php

namespace Azzarip\Utilities\Address;

use Closure;
use Illuminate\View\Component;
use Azzarip\Teavel\Models\Address;
use Illuminate\Contracts\View\View;

class AddressRouter extends Component
{
    public ?string $mode = '';
    public string $type = '';

    public ?Address $address = null;

    public ?string $backUrl;
    /**
     * Create a new component instance.
     */
    public function __construct(string $backUrl = null)
    {
        $this->backUrl = $backUrl;
        $this->mode = request()->query('mode');

        if($this->mode) {
            $this->type = request()->query('type');
        }
        if($this->mode == 'edit') {
            $this->validateAddress();
        }
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('azzarip::address.router');
    }

    protected function validateAddress()
    {
        $id =  request()->query('aid');
        if($id == null) {
            abort(404);
        }

        $address = Address::find($id);
        if($address?->contact_id != auth()->user()->id) {
            abort(403);
        }

        $this->address = $address;
    }
}