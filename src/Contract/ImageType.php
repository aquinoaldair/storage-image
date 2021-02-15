<?php


namespace AquinoAldair\StorageImage\Contract;


use AquinoAldair\StorageImage\Strategies\FromBase64;
use AquinoAldair\StorageImage\Strategies\FromFormData;
use AquinoAldair\StorageImage\Strategies\FromString;
use AquinoAldair\StorageImage\Strategies\FromURL;

abstract class ImageType
{

    public static function Base64(){
        return new FromBase64();
    }

    public static function FormData(){
        return new FromFormData();
    }

    public static function Url(){
        return new FromURL();
    }

    public static function String(){
        return new FromString();
    }
}
