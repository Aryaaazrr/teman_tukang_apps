<?php

namespace Database\Seeders\User\Customer;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Eloquent\Factories\Sequence;
use Illuminate\Database\Seeder;

class CustomerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $raws = User::factory()
          ->count(10)
          ->sequence(function (Sequence $sequence) {
            $i = $sequence->index + 1;

            return [
              'name' => "Customer {$i}",
            //   'username' => "customer{$i}",
              'email' => "customer{$i}@gmail.com",
            ];
          })
        //   ->has(UserDetail::factory(1), 'detail')
          ->make();

        $raws->each(function ($_raw) {
          $user = User::firstOrCreate([
            'name' => $_raw->name,
          ], [
            ...$_raw->toArray(),
            'password' => $_raw->password,
          ]);

          $user->assignRole(User::ROLE_CUSTOMER);
        });
      }
}