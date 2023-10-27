<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run()
    {
        // \DB::table('users')->insert([
        //     [
        //         'name' => 'John Doe',
        //         'username' => 'johndoe',
        //         'email' => 'johndoe@example.com',
        //         'phone_number' => '1234567890',
        //         'country' => 'United States',
        //         'role' => 'user',
        //         'balances' => json_encode(['usd' => rand(100, 100)]),
        //         'total_bonus' => 5,
        //         'password' => Hash::make('password123'),
        //         'created_at' => now(),
        //         'updated_at' => now(),
        //     ],

        //     [
        //         'name' => 'John Doe',
        //         'username' => 'admin',
        //         'email' => 'admin@gmail.com',
        //         'phone_number' => '1234567890',
        //         'country' => 'United States',
        //         'balances' => json_encode(['usd' => rand(100, 100)]),
        //         'role' => 'admin',
        //         'total_bonus' => 5,
        //         'password' => Hash::make('password123'),
        //         'created_at' => now(),
        //         'updated_at' => now(),
        //     ],
        //     // Add more user data as needed
        // ]);

        \DB::table('plans')->insert([
            [
                'name' => 'Starter Plan',
                'min_deposit' => 0,
                'max_deposit' => 0,
                'min_return' => 0,
                'max_return' => 0,
                'gift_bonus' => 0,
                'duration' => 4,
            ],
            [
                'name' => 'Premium Plan',
                'min_deposit' => 0,
                'max_deposit' => 0,
                'min_return' => 0,
                'max_return' => 0,
                'gift_bonus' => 0,
                'duration' => 2 * 30 * 24, // 2 months in hours (assuming 30 days per month)
            ],
            [
                'name' => 'Professional Plan',
                'min_deposit' => 0,
                'max_deposit' => 0,
                'min_return' => 0,
                'max_return' => 0,
                'gift_bonus' => 0,
                'duration' => 5 * 30 * 24, // 5 months in hours (assuming 30 days per month)
            ],
        ]);
        
    }
}
