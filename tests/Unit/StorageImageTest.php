<?php


namespace AquinoAldair\StorageImage\Tests\Unit;


use AquinoAldair\StorageImage\StorageImage;
use AquinoAldair\StorageImage\Strategies\FromBase64;
use AquinoAldair\StorageImage\Strategies\FromFormData;
use AquinoAldair\StorageImage\Strategies\FromString;
use AquinoAldair\StorageImage\Strategies\FromURL;
use AquinoAldair\StorageImage\Tests\TestCase;

use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;
use StorageImage as StorageFacade;

class StorageImageTest extends TestCase
{
    /** @test */
    function it_return_the_string_using_facade()
    {
        $file = "myfile.jpg";
        $this->assertEquals(
            $file,
            StorageFacade::select(new FromString)->store($file)
        );
    }

    /** @test */
    public function it_return_the_string()
    {
        $file = "myfile.jpg";

        $this->assertEquals(
            $file,
            (new StorageImage)->select(new FromString)->store($file)
        );
    }

    /** @test */
    function it_store_from_base_64()
    {
        Storage::fake('public');

        $image = "data:image/png;base64,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";

        $result = (new StorageImage)->select(new FromBase64)->store($image, "test");

        Storage::disk('public')->assertExists($result);
    }

    /** @test */
    function it_store_from_form_data()
    {
        Storage::fake('public');

        $image = UploadedFile::fake()->image('avatar.jpg');

        $result = (new StorageImage)->select(new FromFormData)->store($image, "test");

        Storage::disk('public')->assertExists($result);
    }

    /** @test */
    function it_store_from_url()
    {
        Storage::fake('public');

        $image = "https://homepages.cae.wisc.edu/~ece533/images/airplane.png";

        $result = (new StorageImage)->select(new FromURL)->store($image, "test");

        Storage::disk('public')->assertExists($result);
    }


}
