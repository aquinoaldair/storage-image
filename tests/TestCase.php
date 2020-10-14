<?php

namespace AquinoAldair\StorageImage\Tests;

use AquinoAldair\StorageImage\Facades\StorageImage;
use AquinoAldair\StorageImage\StorageImageServiceProvider;

class TestCase extends \Orchestra\Testbench\TestCase
{
    protected function getPackageProviders($app)
    {
        return [StorageImageServiceProvider::class];
    }

    protected function getPackageAliases($app)
    {
        return [
            "StorageImage" => StorageImage::class
        ];
    }

}
