<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;

class PermissionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $permissions = [
            'user-read',
            'user-create',
            'user-edit',
            'user-delete',
            'role-read',
            'role-create',
            'role-edit',
            'role-delete',
            'permission-read',
            'permission-create',
            'permission-edit',
            'permission-delete'
        ];

        foreach ($permissions as $permission) {
            Permission::create(['name' => $permission]);
        }
    }
}