<?php

namespace AquinoAldair\StorageImage;

use Illuminate\Support\ServiceProvider;

class StorageImageServiceProvider extends ServiceProvider
{
    public function boot(){
        // Publishing config file
        $this->publishes([
            $this->basePath("config/storage-image.php") => config_path('storage-image.php')
        ], 'storage-image');
    }

    public function register()
    {
        // Register the main class to use with the facade
        $this->app->bind('storage-image', function (){
            return new StorageImage();
        });
    }

    protected function basePath($path = ""){
        return __DIR__."/../".$path;
    }
}
