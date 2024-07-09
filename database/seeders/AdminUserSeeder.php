<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;


class AdminUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
    // Creating a specific user with given email and hashed password
    User::factory()->create([
        'email' => 'admin@gmail.com',
        'password' => Hash::make('admin123'),
    ]);
    }
}
