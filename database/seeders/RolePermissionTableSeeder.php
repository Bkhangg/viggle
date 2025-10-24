<?php

namespace Database\Seeders;

use App\Models\Permission;
use App\Models\Role;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RolePermissionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $adminRole = Role::where('name','admin')->first();
        $staffRole = Role::where('name','staff')->first();

        $premissions = Permission::all();

        // Admin have all permission
        $adminRole->permission()->sync($premissions);

        // Staff have all permission
        $staffPermissions = $premissions->whereIn('name', [
            'manage_products',
            'manage_contacts',
        ]);
        $staffRole->permission()->sync($staffPermissions);

    }
}
