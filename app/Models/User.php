<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;


class User extends Authenticatable
{
    protected $fillable = [
        'name',
        'email',
        'password',
        'status',
        'phone_number',
        'avatar',
        'address',
        'role_id',
        'activation_token',
        'google_id',
    ];

    // Quan hệ: 1 user sẽ có nhiều quyền
    public function role() {
        return $this->belongsTo(Role::class);
    }

    // Quan hệ: 1 user sẽ có nhiều review
    public function reviews() {
        return $this->hasMany(Review::class);
    }

    public function shippingAddresses() {
        return $this->hasMany(ShippingAdress::class);
    }

    // Active Status
    public function isPending() {
        return $this->status === 'pending';
    }

    public function isActive() {
        return $this->status === 'active';
    }

    // Active Status
    public function isBanned() {
        return $this->status === 'banned';
    }

    // Active Status
    public function isDeleted() {
        return $this->status === 'deleted';
    }
}
