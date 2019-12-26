<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product_Image extends Model
{
    protected $table = 'product_images';
    protected $fillable = [
        'image', 'product_id'
    ];

    public function image_product()
    {
        return $this->belongsTo('App\Product','product_id');
    }
}
