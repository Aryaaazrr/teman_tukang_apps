<?php

namespace Database\Seeders\Admin;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        DB::table('users')->truncate();
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');

        $superadmin = \App\Models\User::firstOrCreate([
            'email' => 'superadmin@gmail.com',
        ], [
            'name' => 'Super Admin',
            'password' => bcrypt('p4ssword'),
        ]);

        $superadmin->assignRole(
            User::ROLE_SUPERADMIN,
        );

        $admin = \App\Models\User::firstOrCreate([
            'email' => 'admin@gmail.com',
        ], [
            'name' => 'Admin',
            'password' => bcrypt('p4ssword'),
        ]);

        $admin->assignRole(
            User::ROLE_ADMIN
        );
    }
}