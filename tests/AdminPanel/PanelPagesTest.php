<?php

use function Pest\Laravel\get;
use Illuminate\Support\Facades\File;


it('has dashboard page', function () {
    get(route('admin.dashboard'))
        ->assertOk()
        ->assertSee('Dashboard');
});

it('redirects to login', function () {
    auth()->logout();
    get(route('admin.dashboard'))->assertRedirectToRoute('login');
});

