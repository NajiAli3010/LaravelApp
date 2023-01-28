<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Str;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = [
            // User
            [
                'name' => fake()->name(),
           'email' => 'user@user.com',
           'admin' => 0,
            'email_verified_at' => now(),
            'password' => bcrypt('password'), // password
            'remember_token' => Str::random(10),
            ],
            // Admin
            [
                'name' => fake()->name(),
           'email' => 'admin@admin.com',
           'admin' => 1,
            'email_verified_at' => now(),
            'password' => bcrypt('password'), // password
            'remember_token' => Str::random(10),
            ],
        ];

        foreach ($users as $key => $value) {
            User::create($value);
        }
    }
}
