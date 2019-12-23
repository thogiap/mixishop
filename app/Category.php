<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table = 'categories';
    protected $fillable = [
        'name','','price_min','price_max','slug',
    ];

    public function product(){
        return $this->hasMany('App\Product');
    }
}
