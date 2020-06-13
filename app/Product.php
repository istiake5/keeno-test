<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $casts = [
        'images_url' => 'array'
    ];
    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
