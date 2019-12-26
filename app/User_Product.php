<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class User_Product extends Model
{
    protected $table = 'user_carts';
    protected $fillable = [
        'user_id', 'product_id', 'amount', 'cart_id'
    ];

    public function user_product_cart()
    {
        $this->belongsTo('App\Cart');
    }
}
