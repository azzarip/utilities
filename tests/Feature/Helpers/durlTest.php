<?php

use Illuminate\Support\Facades\Config;

it('returns url if no domain is provided', function () {
    $string = fake()->slug();
    expect(durl($string))->toBe(url($string));
});

it('returns exception if not found', function () {
    $string = fake()->slug();
    durl($string, 'wrong_domain');
})->throws(\Exception::class);

it('uses domains from config', function () {
    Config::set('domains.domain', 'domain.test');
    $string = fake()->slug();

    expect(durl($string, 'domain'))->toBe('http://domain.test/'.$string);
});

it('uses correct protocol', function () {
    Config::set('domains.domain', 'domain.test');
    $string = fake()->slug();

    $this->get('https://localhost');
    expect(durl($string, 'domain'))->toBe('https://domain.test/'.$string);
});
