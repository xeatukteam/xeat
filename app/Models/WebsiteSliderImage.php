<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class WebsiteSliderImage extends Model
{

    protected $table = 'website_slider_images'; // Explicitly set table name

    protected $fillable = [
        'image',
        'message'
    ];

    public $timestamps = true; // Enable timestamps (created_at, updated_at)
}
