<?php

namespace AquinoAldair\StorageImage;

use AquinoAldair\StorageImage\Contract\Image;
use AquinoAldair\StorageImage\Strategies\FromBase64;
use AquinoAldair\StorageImage\Strategies\FromFormData;
use AquinoAldair\StorageImage\Strategies\FromString;
use AquinoAldair\StorageImage\Strategies\FromURL;

class StorageImage
{
    public function select(Image $image){
        return $image;
    }

    public static function make(Image $image){
        return (new StorageImage)->select($image);
    }

    public static function FromFormData($image){
        return self::make(new FromFormData($image));
    }

    public static function FromBase64($image){
        return self::make(new FromBase64($image));
    }

    public static function FromURL($image){
        return self::make(new FromURL($image));
    }

    public static function FromString($image){
        return self::make(new FromString($image));
    }
}
