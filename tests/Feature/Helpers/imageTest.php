<?php

test('image returns full url', function () {
    $string = fake()->slug();

    expect(image($string))->toBe('http://localhost/storage/images/'.$string);
});

test('image depends on current domaing', function () {
    $string = fake()->slug();
    $this->get('https://localhost.test');
    expect(image($string))->toBe('https://localhost.test/storage/images/'.$string);
});
