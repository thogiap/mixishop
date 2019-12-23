<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = 'products';
    protected $fillable = [
        'name','price','category_id','slug','decribe','information','rate',
    ];
    public function product_category(){
        return $this->belongsTo('App\Category');
    }
    public function size(){
        return $this->hasMany('App\Size');
    }
    public function product_cart(){
        return $this->belongsToMany('App\Cart', 'user_carts');
    }
    public function product_user(){
        return $this->belongsToMany('App\Cart', 'user_product_comments');
    }
}
