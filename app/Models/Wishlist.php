<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Wishlist extends Model
{
    protected $fillable = [
        'user_id',
        'product_id',
    ];

    public function products()
    {
        return $this->belongsTo(Product::class);
    }

}
