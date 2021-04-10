[![Latest Version on Packagist](https://img.shields.io/packagist/v/aquinoaldair/storage-image.svg?style=flat-square)](https://packagist.org/packages/aquinoaldair/storage-image)
[![Build Status](https://travis-ci.org/aquinoaldair/storage-image.svg?branch=main)](https://travis-ci.org/aquinoaldair/storage-image)

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
$image = "data:image/png;base64.....";

//store image with random 20 character name in Storage disk public (storage/app/public/customFolder) 
$file_name = StorageImage::FromBase64()->store($image, "custom_folder");

echo $file_name; // "custom_folder/jqmix7a1l6masdGasd7S.jpg"
```

### Store from FormData

```php
$image = request()->image;

$file_name = StorageImage::FormData()->store($image, "custom_folder");
```

### Store from URL

```php
$url = "https://homepages.cae.wisc.edu/~ece533/images/airplane.png";

$file_name = StorageImage::FromURL()->store(url, "custom_folder");
```

### Return only string

```php
$url = "https://homepages.cae.wisc.edu/~ece533/images/airplane.png";

$file_name = StorageImage::FromString()->store($url, "custom_folder");

echo $file_name; // "https://homepages.cae.wisc.edu/~ece533/images/airplane.png"

```

## Implement your own storage method

```php

<?php

namespace AquinoAldair\StorageImage\Strategies;

use AquinoAldair\StorageImage\Contract\Image;

class MyCustomClass implements Image
{
    public function store($file, $folder = null)
    {
        // do something
    }
}
$image = "something";

StorageImage::make(new MyCustomClass)->store($image, "custom_folder");

```

## Contributing
Pull requests are welcome. For major changes, please open an issue first to discuss what you would like to change.

Please make sure to update tests as appropriate.

## License

[MIT](./LICENSE.md)
