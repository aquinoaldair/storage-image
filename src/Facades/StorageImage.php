<?php


namespace AquinoAldair\StorageImage\Facades;


use Illuminate\Support\Facades\Facade;

class StorageImage extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'storage-image';
    }
}
