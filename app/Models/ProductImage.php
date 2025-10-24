<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProductImage extends Model
{
    protected $fillable = ['product_id','image'];

    // Quan hệ: Nhiều hình ảnh thuộc 1 sản phẩm
    public function product() {
        return $this->belongsTo(Product::class);
    }
}
