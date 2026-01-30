<?php

namespace Maher\ApiResponder\Facades;

use Illuminate\Support\Facades\Facade;
use Maher\ApiResponder\Contracts\ResponderInterface;

class ApiResponse extends Facade
{
    protected static function getFacadeAccessor()
    {
        return ResponderInterface::class;
    }
}
