<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    public $table = 'products';
    protected $fillable = [
        'name', 'typ', 'price', 'image_url', 'stars', "comment",
    ];
}
