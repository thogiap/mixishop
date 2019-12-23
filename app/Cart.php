<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    protected $table = 'carts';
    protected $fillable = [
        'status','user_id',
    ];

    public function cart_user(){
        return $this->belongsTo('App\User');
    }

    public function cart_product(){
        return $this->belongsToMany('App\Cart', 'user_carts');
    }
}
