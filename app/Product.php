<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends Model
{
    protected $table = 'products';
    protected $fillable = [
        'name', 'price', 'category_id', 'slug', 'describe', 'information', 'rate',
    ];

    public function product_category()
    {

        return $this->belongsTo('App\Category', 'category_id');
    }

    public function size()
    {
        return $this->hasMany('App\Size','product_id');
    }

    public function product_user()
    {
        return $this->belongsToMany('App\User', 'user_products');
    }

    public function product_comment()
    {
        return $this->hasMany('App\User_Product_Comment');
    }

    public function product_image()
    {
        return $this->hasMany('App\Product_Image','product_id');
    }
}
