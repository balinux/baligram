<?php

namespace Balinux\Message\Facades;

use Illuminate\Support\Facades\Facade;

class Instagram extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'balinux-instagram';
    }
}
