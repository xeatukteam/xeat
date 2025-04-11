<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;


class RestaurentItem extends Model
{
    protected $table="r_item";
    protected $primarykey="id";
    protected $fillable = ['*'];
	public $timestamps = false;
    

}
