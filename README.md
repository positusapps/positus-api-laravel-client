## Requirements

- PHP 7.4+
- Laravel 5.3+

## Installing

Use Composer to install it:

````
composer require positus/positus-api-laravel-client
````

Publish the configuration file:

````
php artisan vendor:publish --provider="Positus\Laravel\ClientServiceProvider"
````

Add the `POSITUS_API_TOKEN` variable to the .env file

````
POSITUS_API_TOKEN=token
````

## Instantiating

The Laravel package don't need to create a new instance of the Client. You can simply call the method static.

````php
use Positus\Laravel\Client;

Client::number('your-number-id');
````

## Authentication

If you don't have an authentication token, [click here](https://studio.posit.us/minha-conta/api-tokens) to generate one.

The authentication token must be placed inside the Positus configuration file.

## Documentation

The documentation follows the same guidelines as the [regular php package](https://github.com/positusapps/positus-api-php-client).

In case you have difficulties, we provide an [example video of integration](https://www.youtube.com/watch?v=Sb1R2jnRC4k).