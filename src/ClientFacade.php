<?php

namespace Positus\Laravel;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Positus\Positus
 */
class ClientFacade extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'positus.client';
    }
}
