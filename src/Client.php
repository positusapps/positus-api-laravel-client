<?php

namespace Positus\Laravel;

use Positus\Client as PositusClient;

class Client
{
    public static function number($numberId, $sandbox = false)
    {
        $client = new PositusClient();

        $client->setToken(config('positus.api_token'));

        return $client->number($numberId, $sandbox);
    }
}
