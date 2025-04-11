<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class WebsiteHomepageSection extends Model
{

    // Specify the table name if it doesn't follow Laravel's naming convention
    protected $table = 'website_homepage_section';

    // The attributes that are mass assignable.
    protected $fillable = [
        'message',
        'image',
        'type',
    ];
}
