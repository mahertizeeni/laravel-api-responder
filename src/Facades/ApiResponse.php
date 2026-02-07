<?php

namespace mahertizeeni\ApiResponder\Facades;

use Illuminate\Support\Facades\Facade;
use mahertizeeni\ApiResponder\Contracts\ResponderInterface;

class ApiResponse extends Facade
{
    protected static function getFacadeAccessor()
    {
        return ResponderInterface::class;
    }
}
