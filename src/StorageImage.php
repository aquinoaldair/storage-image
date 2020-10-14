<?php

namespace AquinoAldair\StorageImage;

use AquinoAldair\StorageImage\Contract\Image;
use AquinoAldair\StorageImage\Strategies\ProcessImage;

class StorageImage
{
    public function select(Image $image){
        return new ProcessImage($image);
    }
}
