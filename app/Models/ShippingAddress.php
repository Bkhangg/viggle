<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ShippingAdress extends Model
{
    protected $fillable = [
        'user_id',
        'fullname',
        'phone',
        'address',
        'city',
        'default',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

}
