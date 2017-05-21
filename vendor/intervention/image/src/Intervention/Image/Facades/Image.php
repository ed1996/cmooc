<?php

namespace Intervention\Image\Facades;

use Illuminate\Support\Facades\Facade;

class Image extends Facade
{
    public static function make($avatar)
    {
    }

    protected static function getFacadeAccessor()
    {
        return 'image';
    }
}
