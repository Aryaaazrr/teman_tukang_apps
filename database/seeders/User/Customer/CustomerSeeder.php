<?php

namespace Database\Seeders\User\Customer;

use App\Models\User;
use App\Models\UserDetail;
use Illuminate\Database\Eloquent\Factories\Sequence;
use Illuminate\Database\Seeder;

class CustomerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Buat 10 user customer dengan detail
        $users = User::factory()
            ->count(10)
            ->sequence(function (Sequence $sequence) {
                $i = $sequence->index + 1;

                return [
                    'name' => "Customer {$i}",
                    'username' => "customer{$i}",
                    'email' => "customer{$i}@gmail.com",
                ];
            })
            ->has(UserDetail::factory(), 'detail')
            ->create();

        $users->each(function (User $user) {
            $user->assignRole(User::ROLE_CUSTOMER);
        });
    }
}
