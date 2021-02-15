<?php

namespace AquinoAldair\StorageImage;

use AquinoAldair\StorageImage\Contract\Image;

class StorageImage
{
    public function select(Image $image){
        return $image;
    }

    public static function make(Image $image){
        return (new StorageImage)->select($image);
    }
}
