<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class User_Cart extends Model
{
    protected $table = 'user_carts';
    protected $fillable = [
        'user_id','product_id','amount','cart_id'
    ];
}
