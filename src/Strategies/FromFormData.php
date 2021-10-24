<?php


namespace AquinoAldair\StorageImage\Strategies;


use AquinoAldair\StorageImage\Contract\Image;
use Illuminate\Support\Facades\Storage;

class FromFormData implements Image
{
    private $file;

    public function __construct($file)
    {
        $this->file = $file;
    }

    public function store($folder = null)
    {
        return Storage::disk('public')->put( $folder, $this->file);
    }
}
