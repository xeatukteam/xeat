<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    protected $table="customers";
    protected $primarykey="id";
    protected $fillable = ['*'];
	public $timestamps = false;
    

}
