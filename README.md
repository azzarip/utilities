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
# DROPBOX
Contains the `DropboxServiceProvider` and `DropboxRefreshToken` to use in combination with spatie flysystem.
```
composer require spatie/flysystem-dropbox
```
