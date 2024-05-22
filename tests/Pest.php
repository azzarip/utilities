<?php

use Azzarip\AdminPanel\Tests\TestCase;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Request as SymfonyRequest;

uses(TestCase::class)->in(__DIR__);


function createRequest($method, $uri): Request
{
    $symfonyRequest = SymfonyRequest::create($uri, $method);
    return Request::createFromBase($symfonyRequest);
}
