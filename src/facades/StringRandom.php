<?php

namespace String\Random\Facades;

use Illuminate\Support\Facades\Facade;

class StringRandom extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'StringRandom';
    }

}