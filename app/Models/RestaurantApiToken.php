<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\User;
use App\Models\Voters;

class RestaurantApiToken extends Model
{
    protected $table="restaurant_api_token";
    protected $primarykey="id";
    protected $fillable = ['*'];
	public $timestamps = false;
    

}
