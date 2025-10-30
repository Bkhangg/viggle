<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CartItem extends Model
{
    protected $fillable = ['user_id','product_id','quantity'];

    // Quan hệ: 1 cart item có thể có nhiều user
    public function user() {
        return $this->belongsTo(User::class);
    }

    // Quan hệ: 1 cart item có thể có nhiều user
    public function products() {
        return $this->belongsTo(Product::class);
    }


}
