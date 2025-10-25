<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB; 
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            [
            'name' => 'Admin',
            'email' => 'admin@example.com',
            'password' => Hash::make('Admin@123'),
            'is_admin' => 'Yes',
            'email_verified_at' => now(),
            'remember_token' => Str::random(10),
            'created_at' => now(),
            'updated_at' => now(),
        ],
        [
            'name' => 'Aswin',
            'email' => 'aswin@example.com',
            'password' => Hash::make('aswin@123'),
            'is_admin' => 'No',
            'email_verified_at' => now(),
            'remember_token' => Str::random(10),
            'created_at' => now(),
            'updated_at' => now(),
        ],
        [
            'name' => 'Akash',
            'email' => 'akash@example.com',
            'password' => Hash::make('Akash@123'),
            'is_admin' => 'No',
            'email_verified_at' => now(),
            'remember_token' => Str::random(10),
            'created_at' => now(),
            'updated_at' => now(),
        ],
        [
           'name' => 'Alwin',
            'email' => 'alwin@example.com',
            'password' => Hash::make('Alwin@123'),
            'is_admin' => 'No',
            'email_verified_at' => now(),
            'remember_token' => Str::random(10),
            'created_at' => now(),
            'updated_at' => now(),
        ],
        [
            'name' => 'Meera',
            'email' => 'meera@example.com',
            'password' => Hash::make('Meera@123'),
            'is_admin' => 'No',
            'email_verified_at' => now(),
            'remember_token' => Str::random(10),
            'created_at' => now(),
            'updated_at' => now(),
        ],
        [
           'name' => 'Riya',
            'email' => 'riya@example.com',
            'password' => Hash::make('Riya@123'),
            'is_admin' => 'No',
            'email_verified_at' => now(),
            'remember_token' => Str::random(10),
            'created_at' => now(),
            'updated_at' => now(),
        ],
        [
            'name' => 'Neha',
            'email' => 'neha@example.com',
            'password' => Hash::make('Neha@123'),
            'is_admin' => 'No',
            'email_verified_at' => now(),
            'remember_token' => Str::random(10),
            'created_at' => now(),
            'updated_at' => now(),
        ],
        [
           'name' => 'Swathi',
            'email' => 'swathi@example.com',
            'password' => Hash::make('Swathi@123'),
            'is_admin' => 'No',
            'email_verified_at' => now(),
            'remember_token' => Str::random(10),
            'created_at' => now(),
            'updated_at' => now(),
        ],
        [
           'name' => 'Krishna',
            'email' => 'krishna@example.com',
            'password' => Hash::make('Krishna@123'),
            'is_admin' => 'No',
            'email_verified_at' => now(),
            'remember_token' => Str::random(10),
            'created_at' => now(),
            'updated_at' => now(),
        ],
        [
            'name' => 'Kevin',
            'email' => 'kevin@example.com',
            'password' => Hash::make('Kevin@123'),
            'is_admin' => 'No',
            'email_verified_at' => now(),
            'remember_token' => Str::random(10),
            'created_at' => now(),
            'updated_at' => now(),
        ]
    ]);

    }
}
