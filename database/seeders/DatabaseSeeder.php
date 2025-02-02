<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::create([
            'first_name' => 'Admin', // Change 'name' to 'first_name'
            'last_name' => 'User',   // Add last name
            'email' => 'admin@admin.com',
            'gender' => 'Female',      // Add required fields
            'nationality' => 'Khmer',
            'phone' => '1234567890',
            'address' => 'Street 5',
            'address2' => 'BMC',
            'city' => 'Poipet',
            'zip' => '12345',
            'role' => 'admin',
            'password' => Hash::make('password')
        ]);
    }
}
