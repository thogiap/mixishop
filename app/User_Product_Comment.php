<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class User_Product_Comment extends Model
{
    protected $table = 'users_product_comments';
    protected $fillable = [
        'user_id', 'product_id', 'comment', 'rating',
    ];

    public function comment_user()
    {
        return $this->belongsTo('App\User');
    }

    public function comment_product()
    {
        return $this->belongsTo('App\Product');
    }
}
