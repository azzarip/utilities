<?php

beforeEach( function() {
    request()->attributes->add(['domainKey' => 'base']);
});
it('returns the array of settings', function () {
    $site_array = site();
    expect($site_array)->toBeArray();
});

test('key returns key', function () {
    $key = site('key');
    expect($key)->toBe('base');
});

test('fonts returns fonts array', function () {
    $fonts = site('fonts');
    expect($fonts)->toBeArray()->toBe(['playfair']);
});

test('name returns name array', function () {
    $name = site('name');
    expect($name)->toBe('Site Name');
});

test('other returns []', function () {
    $other = site('other');
    expect($other)->toBe([]);
});
