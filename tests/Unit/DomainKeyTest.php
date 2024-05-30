<?php

use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Azzarip\Utilities\Http\Middleware\DomainKey;

test('it adds domain key to request', function() {
    $request = Request::create('/test', 'GET');

    $next = function ($request) {
        expect($request->get('domainKey'))->toBe('base');
        return response(200);
    };

    (new DomainKey())->handle($request, $next);
});
