<?php

namespace Database\Seeders;

use Database\Seeders\User\Admin\AdminSeeder;
use Database\Seeders\User\Customer\CustomerSeeder;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
       $this->call([
        RoleAndPermissionSeeder::class,
        AdminSeeder::class,
        CustomerSeeder::class,
        SettingSeeder::class,
        ServiceCategorySeeder::class,
        ServiceSeeder::class,
    ]);
    }
}