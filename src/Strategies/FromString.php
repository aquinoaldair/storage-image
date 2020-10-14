<?php


namespace AquinoAldair\StorageImage\Strategies;


use AquinoAldair\StorageImage\Contract\Image;

class FromString implements Image
{

    public function store($file, $folder = null)
    {
        return $file;
    }
}
