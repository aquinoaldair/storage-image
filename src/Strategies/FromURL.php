<?php


namespace AquinoAldair\StorageImage\Strategies;


use AquinoAldair\StorageImage\Contract\Image;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Intervention\Image\ImageManagerStatic as Intervention;

class FromURL implements Image
{
    private $image;

    public function __construct($image)
    {

        $this->image = $image;
    }

    public function store($folder = null)
    {
        $image = Intervention::make(file_get_contents($this->image))->stream();

        $name = $folder."/".Str::random('40').".jpg";

        Storage::disk('public')->put($name, $image);

        return $name;
    }
}
