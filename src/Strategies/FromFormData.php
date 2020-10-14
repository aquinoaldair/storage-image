<?php


namespace AquinoAldair\StorageImage\Strategies;


use AquinoAldair\StorageImage\Contract\Image;
use Illuminate\Support\Facades\Storage;

class FromFormData implements Image
{
    public function store($file, $folder = null)
    {
        return Storage::disk('public')->put( $folder, $file);
    }
}
