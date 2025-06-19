<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public static function run(): void
    {
        User::create([
            'name' => 'Atyla Azfa Al Harits',
            'email' => 'alharits25@gmail.com',
            'password' => bcrypt('12345678'),
        ]);
    }
}
