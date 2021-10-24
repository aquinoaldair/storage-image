<?php


namespace AquinoAldair\StorageImage\Strategies;


use AquinoAldair\StorageImage\Contract\Image;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

use Intervention\Image\ImageManagerStatic as Intervention;

class FromBase64 implements Image
{
    private $file;

    public function __construct($file)
    {
        $this->file = $file;
    }

    public function store($folder = null)
    {
        $image = Intervention::make(base64_decode(preg_replace('#^data:image/\w+;base64,#i', '',$this->file)))->stream();

        $name = $folder."/".Str::random('40').".png";

        Storage::disk('public')->put($name, $image);

        return $name;
    }
}
