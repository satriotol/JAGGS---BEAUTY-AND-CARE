<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'name','desc','price','weight','image_id'
    ];

    public function image()
    {
        return $this->belongsTo(Image::class);
    }
}
