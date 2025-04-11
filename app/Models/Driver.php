<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Driver extends Model
{
    protected $table="driver";
    protected $primarykey="id";
    protected $fillable = ['*'];
	public $timestamps = false;
    

}
