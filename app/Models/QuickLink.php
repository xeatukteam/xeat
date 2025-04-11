<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class QuickLink extends Model
{

    protected $table = 'quick_links';
    protected $primarykey="id";
    protected $fillable = ['title', 'link'];

    public $timestamps = true; // Enables created_at & updated_at timestamps


}
