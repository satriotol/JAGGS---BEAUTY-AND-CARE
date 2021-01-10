<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    protected $fillable = [
        'name','file','template'
    ];

    public function products()
    {
        return $this->hasMany(Product::class);
    }
}
