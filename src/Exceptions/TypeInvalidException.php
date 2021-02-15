<?php


namespace AquinoAldair\StorageImage\Exceptions;


class TypeInvalidException extends \Exception
{
    public function report()
    {
        return "the parameter type is not valid";
    }
}
