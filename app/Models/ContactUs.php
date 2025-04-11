<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ContactUs extends Model
{
    protected $table = 'contact_us';

    protected $fillable = [
        'email',
        'phone',
        'address',
        'icon_image',
    ];

    public $timestamps = true; // Enable timestamps (created_at, updated_at)


}
