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

    public static function FormData(){
        return self::make(new FromFormData);
    }

    public static function FromBase64(){
        return self::make(new FromBase64);
    }

    public static function FromURL(){
        return self::make(new FromURL);
    }

    public static function FromString(){
        return self::make(new FromString);
    }
}
