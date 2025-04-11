<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class WebIconSlider extends Model
{
    protected $table = 'website_icon_slider_images';

    protected $fillable = [
        'title',
        'icon_image',
        'coming_soon',
        'sequence_number',
    ];

    public $timestamps = true;

}
