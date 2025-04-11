<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Giftstore extends Model
{
    protected $table="giftstore";
    protected $primarykey="id";
    protected $fillable = ['*'];
	public $timestamps = true;
}
