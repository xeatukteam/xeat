<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class XeatDriver extends Model
{
    protected $table="xeat_drivers";
    protected $primarykey="id";
    protected $fillable = ['*'];
	public $timestamps = true;
    

}
