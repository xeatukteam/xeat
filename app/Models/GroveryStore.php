<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class GroveryStore extends Model
{
    protected $table="grocery_store";
    protected $primarykey="id";
    protected $fillable = ['*'];
	public $timestamps = false;
    

}
