# Store Image for Laravel

Laravel library for easy store images.

## Installation

You can install the package via composer:

```bash
composer require aquinoaldair/storage-image
```

## Usage

```php
use AquinoAldair\StorageImage\StorageImage;
```

### Store from Base64

```php
use AquinoAldair\StorageImage\Strategies\FromBase64;

//store image with random 20 character name in Storage disk public (storage/app/public/customFolder) 
$file_name = (new StorageImage)->select(new FromBase64)->store($image, "customFolder");

echo $file_name; // "customFolder/jqmix7a1l6masdGasd7S.jpg"
```

### Store from FormData

```php
use AquinoAldair\StorageImage\Strategies\FromFormData;

$image = request()->image;

$file_name = (new StorageImage)->select(new FromFormData)->store($image, "customFolder");

```

### Store from URL

```php
use AquinoAldair\StorageImage\Strategies\FromURL;

$url = "https://homepages.cae.wisc.edu/~ece533/images/airplane.png";

$file_name = (new StorageImage)->select(new FromURL)->store(url, "customFolder");

```

### Return only string

```php
use AquinoAldair\StorageImage\Strategies\FromString;

$url = "https://homepages.cae.wisc.edu/~ece533/images/airplane.png";

$file_name = (new StorageImage)->select(new FromString)->store(url, "customFolder");

echo $file_name; // "https://homepages.cae.wisc.edu/~ece533/images/airplane.png"

```

## Usage with Facade

```php
use StorageImage;
use AquinoAldair\StorageImage\Strategies\FromURL;


$url = "https://homepages.cae.wisc.edu/~ece533/images/airplane.png";

$file_name = StorageImage::select(new FromURL)->store(url, "customFolder");


```



## Implement with your own Class

```php

<?php


namespace AquinoAldair\StorageImage\Strategies;


use AquinoAldair\StorageImage\Contract\Image;

class MyOwnClass implements Image
{

    public function store($file, $folder = null)
    {
        // return the implementation
    }
}


```

## Contributing
Pull requests are welcome. For major changes, please open an issue first to discuss what you would like to change.

Please make sure to update tests as appropriate.

## License

The MIT License (MIT)(./LICENSE.md) for more information.
