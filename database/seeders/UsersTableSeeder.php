<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create(attributes: [
            'name'         => 'Nguyen Van A',
            'email'        => 'nguyenvana@example.com',
            'password'     => bcrypt(value: '123456'),
            'phone_number' => '0123456789',
            'status'       => 'pending',
            'avatar'       => '',
            'address'      => 'Da Nang, Vietnam',
            'role_id'      => 1,
            'created_at'   => now(),
            'updated_at'   => now(),
        ]);

        User::create(attributes: [
            'name'         => 'Tran Thi B',
            'email'        => 'trinhthib@example.com',
            'password'     => bcrypt(value: '123456'),
            'phone_number' => '0123456789',
            'status'       => 'pending',
            'avatar'       => '',
            'address'      => 'Da Nang, Vietnam',
            'role_id'      => 2,
            'created_at'   => now(),
            'updated_at'   => now(),
        ]);

        User::create(attributes: [
            'name'         => 'Thach Bao Khang',
            'email'        => 'thachbaokhang@example.com',
            'password'     => bcrypt(value: '123456'),
            'phone_number' => '0123456789',
            'status'       => 'pending',
            'avatar'       => '',
            'address'      => 'Ho Chi Minh, Vietnam',
            'role_id'      => 3,
            'created_at'   => now(),
            'updated_at'   => now(),
        ]);
    }
}
