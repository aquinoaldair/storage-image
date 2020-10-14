<?php


namespace AquinoAldair\StorageImage\Contract;


interface Image
{
    public function store($file, $folder = null);
}
