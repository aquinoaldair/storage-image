<?php


namespace AquinoAldair\StorageImage\Strategies;


use AquinoAldair\StorageImage\Contract\Image;

class ProcessImage
{
    /**
     * @var Image
     */
    private $image;

    public function __construct(Image $image)
    {
        $this->image = $image;
    }

    public function store($file, $folder = null){
        return $this->image->store($file, $folder);
    }
}
