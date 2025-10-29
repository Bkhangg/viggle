<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = ['name','slug','description','image'];

    // Quan hệ: 1 danh mục sẽ có nhiều sản phẩm
    public function products() {
        return $this->hasMany(Product::class);
    }
}
