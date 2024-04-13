Contains utilities classes used on all Pizza Azzari websites.

# CHF

Contains the `CHF` object. It reads rappe integers as

```
CHF::int(142) // 1.42 CHF
CHF::chf(1.42) // 1.42 CHF
```

The CHF objects outputs the string value as

```
$chf = CHF::int(100)
{{ $chf }} // 1.00
$chf->format() // 1.-
$chf->label() // CHF 1.-
```

# Cookie

Add before the end of the html document

```
@livewire('cookie-consent')
```

It will spawn a modal with three options:

-   Accept all
-   Only Essentials
-   Modify
    Depending on the choice of the user, it will deploy a cookie that will confirm the acceptance of the cookie policy.

The cookie is calle `cookie_consent` is not encrypted, and contains a timestamp, the three consent (optional, marketing, analytics) and a version of the cookie banner.
The cookie is refreshed every time, expires after one year or with a change of version.

# Admin Panel

## Installation

Run the following artisan command:

```
php artisan admin-panel:install
```

It will create a view/vendor/admin-panel directory with `home.blade.php` inside.
This file access the admin home page at `home.DOMAIN_BASE`.

## Other console commands

Install a new panel, which is automatically discovered.

```
php artisan admin-panel:make panel_name
```

Creates a new panel with name `panel_name`. It is automatically discovered, when the 1 day cache expires.

To refresh the cache use

```
php artisan admin-panel:refresh
```
