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
        // admin user
        User::factory()->create([
            'name' => 'Shahzad Farooq',
            'email' => 'admin@aisekho.com',
            'role' => 'admin',
            'password' => Hash::make('password'),
        ]);
        // teacher user
        User::factory()->create([
            'name' => 'Zaid Munawar',
            'email' => 'teacher@aisekho.com',
            'role' => 'teacher',
            'password' => Hash::make('password'),
        ]);
        // student user
        User::factory()->create([
            'name' => 'Muhtshim Daud',
            'email' => 'user@aisekho.com',
            'role' => 'student',
            'password' => Hash::make('password'),
        ]);
    }
}
