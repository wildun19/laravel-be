<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::factory(20)->create();
        User::create([
            'name' => 'wildan',
            'email' => 'wildan@gmail.com',
            'email_verified_at' => now(),
            'role' => 'admin',
            'password' => Hash::make('123456'),
            'phone' => fake()->phoneNumber(),
            'bio' => fake()->paragraph(),
        ]);

        User::create([
            'name' => 'abdun',
            'email' => 'abdun@gmail.com',
            'email_verified_at' => now(),
            'role' => 'superadmin',
            'password' => Hash::make('123456'),
            'phone' => fake()->phoneNumber(),
            'bio' => fake()->paragraph(),
        ]);
    }
}
