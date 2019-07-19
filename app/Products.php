<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
    protected $fillable = [
        'typ', 'dat', 'comment_sor',
    ];
}
