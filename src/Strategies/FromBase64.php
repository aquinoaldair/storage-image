<?php


namespace AquinoAldair\StorageImage\Strategies;


use AquinoAldair\StorageImage\Contract\Image;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

use Intervention\Image\ImageManagerStatic as Intervention;

class FromBase64 implements Image
{
    public function store($file, $folder = null)
    {
        $image = Intervention::make(base64_decode(preg_replace('#^data:image/\w+;base64,#i', '',$file)))->stream();

        $name = $folder."/".Str::random('40').".png";

        Storage::disk('public')->put($name, $image);

        return $name;
    }
}
