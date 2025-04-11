<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\User;
use App\Restaurant;
use App\Models\WebIconSlider;

class WebsiteReview extends Model
{
    protected $table = 'website_reviews';

    protected $fillable = [
        'customer_id',
        'restaurant_id',
        'message',
        'rating',
        'image',
    ];


    public function customer()
    {
        return $this->belongsTo(User::class, 'customer_id');
    }

    public function restaurant()
    {
        return $this->belongsTo(WebIconSlider::class, 'restaurant_id');
    }
    
}
