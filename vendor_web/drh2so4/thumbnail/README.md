![Laravel Thumbnails](https://github.com/pratiksh404/laravel-thumbnails/blob/master/img/laravel-thumbnail.png)

[![Stars](https://img.shields.io/github/stars/pratiksh404/laravel-thumbnails)](https://github.com/pratiksh404/laravel-thumbnails/stargazers) [![Downloads](https://img.shields.io/packagist/dt/drh2so4/thumbnail.svg?style=flat-square)](https://packagist.org/packages/drh2so4/thumbnail) [![StyleCI](https://github.styleci.io/repos/270181879/shield?branch=master)](https://github.styleci.io/repos/270181879?branch=master) [![Build Status](https://scrutinizer-ci.com/g/pratiksh404/laravel-thumbnails/badges/build.png?b=master)](https://scrutinizer-ci.com/g/pratiksh404/laravel-thumbnails/build-status/master) [![Scrutinizer Code Quality](https://scrutinizer-ci.com/g/pratiksh404/laravel-thumbnails/badges/quality-score.png?b=master)](https://scrutinizer-ci.com/g/pratiksh404/laravel-thumbnails/?branch=master) [![CodeFactor](https://www.codefactor.io/repository/github/pratiksh404/laravel-thumbnails/badge)](https://www.codefactor.io/repository/github/pratiksh404/laravel-thumbnails) [![License](https://img.shields.io/github/license/pratiksh404/laravel-thumbnails)](//packagist.org/packages/drh2so4/thumbnail) [![Laravel News](https://img.shields.io/badge/Featured-Laravel%20News-blue)](https://github.com/pratiksh404) [![MadeWithLaravel.com shield](https://madewithlaravel.com/storage/repo-shields/2709-shield.svg)](https://madewithlaravel.com/p/laravel-thumbnail/shield-link)

## Laravel Thumbnail Generator

Package for uploading the image and saving that image along with it's thumbnail.

## What does it do ?

- Uploads Image
- Make its thumbnail i.e low quality, resized version of its parent image

## Why use thumbnails ?

The small file size of thumbnails makes it possible for website designers to offer visitors a lot of content immediately without increasing the loading time of the page.
Also why use full glory of that image if you just have to crunched it up to tiny space... Use thumbnail.

### Installation

Run Composer Require Command

```sh
$ composer require drh2so4/thumbnail
```

Use thumbnail trait to your model

```sh
<?php

namespace App;

use drh2so4\Thumbnail\Traits\thumbnail;
use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    use Thumbnail;

    protected $fillable = ['image'];
}

```

This model consists of following methods :-

- makeThumbnail
- thumbnail
- uploadImage
- hasThumbnail
- thumbnailCount
- imageDetail
- hardDelete

### Usages

Package utilizes it's trait method, let us guide you to use that

## makeThumbnail

This method is responsible for actually uploading the image and making its thumbnail.

```sh
    public function store(Request $request)
    {
        $image = Image::create($this->validateData());
        $image->makeThumbnail('image'); //This handles uploading image and storing it's thumbnail
        return redirect('/imageUpload');
    }
```

Same can go with update method.

## thumbnail

Well, we created our thumbnail but how to use it, let me guide through that
When we uploaded image with name suppose "batman".
Image is upload with name batman-current_time_instant i.e (batman-1521549.jpg).

What about thumbnail...
well thumbnail uses it's parent image name followed by -size
i.e batman-1521549-medium-jpg, batman-1521549-small.jpg

## How to make thumbnail ?

There are the options you can have for making thumbnails :-

- Default Option
- Universal Custom Thumbnails
- Specfic Custom Thumbnails

### Default Option

you can just call the following and the packages will handle the rest

```sh

    $image->makeThumbnail('image'); //Here the first parameter is image attribute name saved in db

```

Note : if the attribute dedicated for storing image is named 'image' you don't have to pass image attribute name jusr use \$image->makeThumbnail();

### Universal Custom Thumbnails

here you should mention the thumbnails that you want to be applied on every case.
when you publish thumbnail.php config file you will find 'thumbnails' property where you can mention your custom thumbnails

```sh
    /*
    |--------------------------------------------------------------------------
    | Custom Thumbnail Creation
    |--------------------------------------------------------------------------
    | Uncomment to create...
    */

    /*     "thumbnails" => [
        [
            "thumbnail-name" => "medium",
            "thumbnail-width" => 800,
            "thumbnail-height" => 600,
            "thumbnail-quality" => 60
        ],
        [
            "thumbnail-name" => "small",
            "thumbnail-width" => 400,
            "thumbnail-height" => 300,
            "thumbnail-quality" => 30
        ]
    ] */
```

Note: This will override default option

### Specfic Custom Thumbnails

Suppose you have applied Universal Custom Thumbnails but need to have changes for specific image field then you can pass array of custom requirements :

```sh
        $thumbnails = [
            'storage' => 'customs/embed',
            'width' => '600',
            'height' => '400',
            'quality' => '70',
            'thumbnails' => [
                [
                    'thumbnail-name' => 'customSmall',
                    'thumbnail-width' => '300',
                    'thumbnail-height' => '200',
                    'thumbnail-quality' => '50'
                ]
            ]
        ];
        $image->makeThumbnail('image', $thumbnails);
```

### How about multiple image uploads

If you are performing multiple image upload at once pass image key to thumbnail array.
here \$img is one of the image in chunk of images passed

```sh
// Controller Store Method
public function store(Request $request)
{
    $image = Image::create(['images'=>$request->images]);
    foreach($request->images as $img)
    {
        $this->multipleImageUpload($image,$img);
    }
}
// Multiple Image Upload
    private function multipleImageUpload($image, $img)
    {
        $multiple = [
            'storage' => 'custom_test/folder/another_folder/image',
            'width' => '600',
            'height' => '400',
            'quality' => '70',
            'image' => $img,
            'thumbnails' => [
                [
                    'thumbnail-name' => 'small',
                    'thumbnail-width' => '300',
                    'thumbnail-height' => '200',
                    'thumbnail-quality' => '50'
                ]
            ]
        ];
        $image->makeThumbnail('image', $multiple);
    }
```

## How to use thumbnail ?

Just call as following

```sh
// Here the first parameter 'image' is the name of sttribute that is saved in db for image

    @foreach ($images as $image)
        <img src="{{asset($image->thumbnail('image','small'))}}"> // For small thumbnail
    <img src="{{asset($image->thumbnail('image','medium'))}}"> // For medium thumbnail
    @endforeach
```

if you are using custom thumbnail configured from config file just call as follows

```sh
// Here the first parameter 'image' is the name of sttribute that is saved in db for image
// Second parameter is the name of thumbnail that you gave in 'thumbnail-name' in the config file on custom thumbnail field called 'thumbnails'
    @foreach ($images as $image)
        <img src="{{asset($image->thumbnail('image','small'))}}"> // For small thumbnail
    <img src="{{asset($image->thumbnail('image','medium'))}}"> // For medium thumbnail
    @endforeach
```

Notice that parameter of function thumbnail is string same as value given for "thumbnail-name" in config file.

Thumbnail's image property is predefined but if you wish to change that publish it's config file thumbnail.php

```sh
php artisan vendor:publish --tag=thumbnail-config
```

### Image Property

You can obtaing the detail image property by using method imageDetail($image,$size)

```sh
// imageDetail method takes two parameter
// Model image attribute name (Mandatory)
// If you want thumbnail property pass its size (optional)

$image->imageDetail('image'); // Parent Image Detail Property
$image->imageDetail('image','small') // Small thumbnail related to parent image
```

### What Image Property/Detail Gives

## Default Thumbnail Image Properties

| Property  | Return Type | Description                           | Example                                  |
| --------- | ----------- | ------------------------------------- | ---------------------------------------- |
| image     | string      | Image path stored in DB               | \$image->imageDetail('image')->image     |
| name      | string      | Image Stored Name (without extension) | \$image->imageDetail('image')->name      |
| fullname  | string      | Image Stored Name (with extension)    | \$image->imageDetail('image')->fullname  |
| extension | string      | Image Extension Name                  | \$image->imageDetail('image')->extension |
| path      | string      | Image Storage Path                    | \$image->imageDetail('image')->path      |
| directory | string      | Image Stored Directory                | \$image->imageDetail('image')->directory |
| location  | string      | Image Full Location Path              | \$image->imageDetail('image')->location  |
| property  | array       | Image Property array                  | \$image->imageDetail('image')->property  |

Image Property array (\$image->imageDetail('image')->property)

| Property        | Return Type | Description                                        | Example                                                  |
| --------------- | ----------- | -------------------------------------------------- | -------------------------------------------------------- |
| real_name       | string      | Image Real Name (without timestamp and size label) | \$image->imageDetail('image')->property->name            |
| size            | integer     | Image Storage Size                                 | \$image->imageDetail('image')->property->fullname        |
| directory       | string      | Image Stored Directory                             | \$image->imageDetail('image')->property->directory       |
| location        | string      | Image Full Location Path                           | \$image->imageDetail('image')->property->location        |
| has_thumbnail   | boolean     | Image's Thumbnail Check                            | \$image->imageDetail('image')->property->has_thumbnail   |
| thumbnail_count | integer     | Image Thumbnail Count                              | \$image->imageDetail('image')->property->thumbnail_count |
| thumbnails      | array       | Return all thumbnail Detail                        | \$image->imageDetail('image')->property->thumbnails      |

Image Thumbnail Property
| Property | Return Type | Description  
| --------------- | ----------- | --------------------------------------------------
| image | string | Thumbnail Name  
| real_name | string | Thumbnail Real Name (without timestamp and size label)
| size | integer | Thumbnail Storage Size  
| created_date | Carbon | Thumbnail Created Date  
| path | string | Thumbnail Storage Path  
| directory | string | Thumbnail Stored Directory  
| location | string | Thumbnail Full Location Path

### Check if image has thumbnail

```sh
$image->hasThumbnail('image'); // Check for any availabe thumbnail
$image->hasThumbnail('image','small'); // Second paremater is thumbnail size check
```

### Obtain Image Thumbnail Count

```sh
$image->thumbnailCount('image');
```

### Hard Delete Image with Thumbnails

```sh
$image->hardDelete('image'); // First parameter is db attribute name for image
```

### Hard Delete Image with Thumbnails adn its parent

```sh
$image->hardDeleteWithParent('image'); // First parameter is db attribute name for image
```

### Upload Only Umage

```sh
$solo_image = [
                'storage' => 'solo',
                'width' => '600',
                'height' => '300',
                'quality' => '70',
            ];
            $image->uploadImage('image', $solo_image); // Second Parameter is not necessary if default settings is to be applied
            // OR
            $image->uploadImage('image'); // Image Upload with default setting
```

Our config file looks like follows :-

```sh
<?php

return [


    /*
    |--------------------------------------------------------------------------
    |  Thumbnail Feature
    |--------------------------------------------------------------------------
    |
    | This option defines whether to use Package's Thumbnail feature or not
    | Default option is true
    |
    */
    'thumbnail' => true,

    /*
    |--------------------------------------------------------------------------
    | Thumbnail Qualities
    |--------------------------------------------------------------------------
    |
    | These options are default post image and its thumbnail quality
    |
    |
    */

    'image_quality' => 80,
    'medium_thumbnail_quality' => 60,
    'small_thumbnail_quality' => 30,

    /*
    |--------------------------------------------------------------------------
    | Default Image Fit Size
    |--------------------------------------------------------------------------
    |
    | These options is default post imahe height and width fit size
    |
    |
    */

    'img_width' => 1000,
    'img_height' => 800,

    'medium_thumbnail_width' => 800,
    'medium_thumbnail_height' => 600,

    'small_thumbnail_width' => 400,
    'small_thumbnail_height' => 300,

    /*
    |--------------------------------------------------------------------------
    | Image and Thumbnail Storage Path
    |--------------------------------------------------------------------------
    |
    | Define your default image storage location along with its thumbnail
    |
    |
    */

    "storage_path" => "uploads",

    /*
    |--------------------------------------------------------------------------
    | Custom Thumbnail Creation
    |--------------------------------------------------------------------------
    | Uncomment to create...
    */

    /*     "thumbnails" => [
        [
            "thumbnail-name" => "medium",
            "thumbnail-width" => 800,
            "thumbnail-height" => 600,
            "thumbnail-quality" => 60
        ],
        [
            "thumbnail-name" => "small",
            "thumbnail-width" => 400,
            "thumbnail-height" => 300,
            "thumbnail-quality" => 30
        ],
        ] */
];


```

Feel free to change the values

## Default Thumbnail Image Properties

| Thumbnail        | Width | Height | Quality |
| ---------------- | ----- | ------ | ------- |
| Uploaded Image   | 1000  | 800    | 80      |
| Medium Thumbnail | 800   | 600    | 60      |
| Small Thumbnail  | 400   | 300    | 30      |

![Laravel Thumbnails](https://github.com/pratiksh404/laravel-thumbnails/blob/master/img/thumbnails.png)

### Todos

- Error Handling
- Image Caching
- Maintainabilty

## Package Used

- http://image.intervention.io/

## License

MIT

**DOCTYPE NEPAL || DR.H2SO4**
