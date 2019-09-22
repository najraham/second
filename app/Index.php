<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Index extends Model
{
    protected $casts = [
        'banner_image' => 'array',
    ];
}
