<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Category extends Model
{

    protected $table = 'categories';
    protected $fillable = [
        'name', 'price_min', 'price_max', 'slug',
    ];

    public function category_product()
    {
        return $this->hasMany('App\Product','category_id');
    }
}
