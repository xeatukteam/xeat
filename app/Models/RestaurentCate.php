<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class RestaurentCate extends Model
{
    protected $table="r_category";
    protected $primarykey="id";
    protected $fillable = ['*'];
	public $timestamps = false;
    

}
