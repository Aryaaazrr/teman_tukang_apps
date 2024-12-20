<?php

namespace Database\Seeders\User\Admin;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

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

        $superadmin = User::firstOrCreate([
            'username' => 'superadmin',
            'email' => 'superadmin@gmail.com',
        ], [
            'name' => 'Super Admin',
            'password' => Hash::make('p4ssword'),
            'email_verified_at' => now(),
            'phone' => fake('id')->phoneNumber(),
        ]);

        $superadmin->assignRole(User::ROLE_SUPERADMIN);

        $admin = User::firstOrCreate([
            'username' => 'admin',
            'email' => 'admin@gmail.com',
        ], [
            'name' => 'Admin',
            'password' => Hash::make('p4ssword'),
            'email_verified_at' => now(),
            'phone' => fake('id')->phoneNumber(),
        ]);

        $admin->assignRole(User::ROLE_ADMIN);
    }
}