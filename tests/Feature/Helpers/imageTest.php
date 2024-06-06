<?php

beforeEach(function () {
    request()->attributes->add(['domainKey' => 'base']);
});

test('image returns full url', function () {
    $string = fake()->slug();

    expect(image($string))->toBe('http://localhost.test/storage/images/'.$string);
});

test('image depends on current domain', function () {
    $string = fake()->slug();
    $this->get('https://admin.localhost.test');
    expect(image($string))->toBe('https://admin.localhost.test/storage/images/'.$string);
});
