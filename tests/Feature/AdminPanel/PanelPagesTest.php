<?php

use function Pest\Laravel\get;

it('has dashboard page', function () {
    get(route('admin.dashboard'))
        ->assertOk()
        ->assertSee('Dashboard');
});

it('redirects to login', function () {
    auth()->logout();
    get(route('admin.dashboard'))->assertRedirectToRoute('login');
});

it('returns other panels', function () {
    $this->artisan('admin-panel:make test');
    $this->refreshApplication();
    $this->actingAs($this->user);
    $this->withoutVite();
    get('http://admin.localhost.test/test')->assertOk();
});

it('404 on other pages', function () {
    get('http://admin.localhost.test/paco')->assertStatus(404);
});
