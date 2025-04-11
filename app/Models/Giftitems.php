<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Giftitems extends Model
{
    protected $table="giftstore_items";
    protected $primarykey="id";
    protected $fillable = ['*'];
	public $timestamps = true;
}
