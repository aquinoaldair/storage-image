<?php


namespace AquinoAldair\StorageImage\Strategies;


use AquinoAldair\StorageImage\Contract\Image;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Intervention\Image\ImageManagerStatic as Intervention;

class FromURL implements Image
{

    public function store($file, $folder = null)
    {
        $image = Intervention::make(file_get_contents($file))->stream();

        $name = $folder."/".Str::random('40').".jpg";

        Storage::disk('public')->put($name, $image);

        return $name;
    }
}
