<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class GiftStoreItems extends Model
{
    protected $table="giftstore_items";
    protected $primarykey="id";
    protected $fillable = ['*'];
	public $timestamps = true;
}
