<?php

use Azzarip\Utilities\Http\Middleware\DomainKey;
use Illuminate\Http\Request;

test('it adds domain key to request', function () {
    $request = Request::create('/test', 'GET');

    $next = function ($request) {
        expect($request->get('domainKey'))->toBe('base');

        return response(200);
    };

    (new DomainKey)->handle($request, $next);
});
