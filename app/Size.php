<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Size extends Model
{
    protected $table = 'sizes';
    protected $fillable = [
        'product_id','size','amount',
    ];

    public function size_product(){
        return $this->belongsTo('App\Product');
    }
}
