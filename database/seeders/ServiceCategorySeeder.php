<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class ServiceCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = [
            ['name' => 'Metal Works', 'slug' => Str::slug('Metal Works'), 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Ceiling Installation', 'slug' => Str::slug('Ceiling Installation'), 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Light Steel Construction', 'slug' => Str::slug('Light Steel Construction'), 'created_at' => now(), 'updated_at' => now()],
        ];

        DB::table('service_category')->insert($categories);
    }
}