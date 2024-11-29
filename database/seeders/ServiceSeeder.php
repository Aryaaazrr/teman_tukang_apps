<?php

namespace Database\Seeders;

use App\Models\Service;
use App\Models\ServiceCategory;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;  

class ServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = ServiceCategory::all();
        $adminUser = User::whereHas('roles', function ($query) {
            $query->where('username', 'superadmin');
        })->first();

        if (!$adminUser) {
            $this->command->warn('No admin user found. Please create an admin user first.');
            return;
        }

        $services = [
            [
                'name' => 'High-Quality Light Steel Building Solutions',
                'description' => 'High-quality steel building solutions for residential and commercial projects.',
                'image' => 'https://via.placeholder.com/640x480?text=Light+Steel+Building+Solutions',
                'price' => 500.00,
            ],
            [
                'name' => 'Durable Ceiling Solutions for Homes and Offices',
                'description' => 'Providing durable ceiling installations for homes and office buildings.',
                'image' => 'https://via.placeholder.com/640x480?text=Durable+Ceiling+Solutions',
                'price' => 200.00,
            ],
            [
                'name' => 'Professional and Reliable Welding Services',
                'description' => 'Welding services for various industrial and residential needs.',
                'image' => 'https://via.placeholder.com/640x480?text=Welding+Services',
                'price' => 150.00,
            ],
        ];

        foreach ($services as $service) {
            $category = $categories->firstWhere('name', 'Light Steel Construction');
            if ($category) {
                Service::create([
                    'user_id' => $adminUser->id,
                    'service_category_id' => $category->id,
                    'title' => $service['name'],
                    'slug' => Str::slug($service['name']),
                    'description' => $service['description'],
                    'image' => $service['image'],
                    'price' => $service['price'],
                ]);
            }
        }
    }
}