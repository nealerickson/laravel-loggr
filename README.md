# Installation

Update your `composer.json` file to include this package as a dependency
```json
"heedworks/laravel-loggr": "dev-master"
```

Register the Loggr service provider by adding it to the providers array in the `app/config/app.php` file.
```
Heedworks\LaravelLoggr\LaravelLoggrServiceProvider
```

Alias the Loggr facade by adding it to the aliases array in the `app/config/app.php` file.
```php
'aliases' => array(
	'Loggr' => 'Heedworks\LaravelLoggr\Facades\Loggr'
)
```

# Configuration

Copy the config file into your project by running
```
php artisan config:publish heedworks/laravel-loggr
```

Edit the config file to include your Loggr logKey and apiKey.

# Usage

Pulls in the Loggr PHP agent found here: http://github.com/nealerickson/loggr-php