## Requirements

- PHP 7.4+
- Laravel 7.0+

## Installing

| Positus Client | Laravel ^6.0       | Laravel ^7.0       | Laravel ^8.0       |
|----------------|--------------------|--------------------|--------------------|
| 0.0.5          | :white_check_mark: | :x:                | :x:                |
| 0.1.0          | :x:                | :white_check_mark: | :white_check_mark: |

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