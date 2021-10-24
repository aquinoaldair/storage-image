<?php


namespace AquinoAldair\StorageImage\Strategies;


use AquinoAldair\StorageImage\Contract\Image;

class FromString implements Image
{
    private $image;

    public function __construct($image)
    {
        $this->image = $image;
    }

    public function store( $folder = null)
    {
        return $this->image;
    }
}
