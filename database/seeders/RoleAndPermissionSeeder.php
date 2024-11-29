<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class RoleAndPermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Schema::disableForeignKeyConstraints();

        Role::truncate();
        Permission::truncate();
        DB::table('model_has_roles')->truncate();
        DB::table('model_has_permissions')->truncate();
        DB::table('role_has_permissions')->truncate();

        $roles = ['superadmin', 'admin', 'customer'];

        foreach ($roles as $role) {
            Role::create(['name' => $role]);
        }

        $adminAccessPermission = Permission::create(['name' => 'admin access']);
        $adminRole = Role::whereName('admin')->first();
        $adminAccessPermission->givePermissionTo($adminRole);

        $customerRole = Role::whereName('customer')->first();
        $customerPermissions = [
            'customer address create',
            'customer address read',
            'customer address update',
            'customer address delete',
            'favorites services create',
            'favorites services read',
            'favorites services update',
            'favorites services dalete',
            'transaction services create',
            'transaction services read',
            'transaction services update',
            'testimonials services create',
        ];

        foreach ($customerPermissions as $name) {
            $customerPermissions = Permission::create(['name' => $name]);
            $customerRole->givePermissionTo($customerPermissions);
        }

        $customerRole->givePermissionTo($adminAccessPermission);

        $otherPermissions = [
            'users read',
            'users create',
            'users update',
            'users delete',
            'customer read',
            'customer create',
            'customer update',
            'customer delete',
            'services categories read',
            'services categories create',
            'services categories update',
            'services categories delete',
            'services read',
            'services create',
            'services update',
            'services delete',
            'inboxes read',
            'inboxes create',
            'inboxes update',
            'inboxes delete',
            'settings',
        ];

        foreach ($otherPermissions as $name) {
            Permission::create(['name' => $name]);
        }

        Schema::enableForeignKeyConstraints();
    }
}