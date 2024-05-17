@props(['bg' => 'bg-grey-50/50', 'nav' => true])

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge, chrome=1">
    <meta name="referrer" content="no-referrer-when-downgrade">
    @if (isset($seo))
        {!!  seo($seo) !!}
    @else
        <title>{{ config('seo.sitename') }}</title>
        <meta name="robots" content="noindex">
        <meta name="robots" content="nofollow">
        <meta name="robots" content="noarchive">
    @endif
    <x-tagmanager-head />
    @yield('head')
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @livewireStyles
    @googlefonts
</head>

<body class="{{ $bg }}">
    <x-tagmanager-body />

    <div class="flex flex-col justify-between min-h-screen">
    <x-theme :$nav >
        @yield('body')
    </x-theme>
    </div>

    @if(config('utilities.cookie-consent'))
        @livewire('cookie-consent')
    @endif
    @yield('scripts')
    @livewireScripts
</body>
</html>
