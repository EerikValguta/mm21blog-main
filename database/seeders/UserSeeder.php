<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::factory(1)->create([
            'email' => env('DEFAULT_USER_EMAIL', 'user@example.com'),
            'name' => env('DEFAULT_USER_NAME', 'User McUserface'),
            'password' => bcrypt(env('DEFAULT_USER_PASSWORD', 'password'))
        ]);

        User::factory(10)->create();
    }
}
