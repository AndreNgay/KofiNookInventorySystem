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
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        
        \App\Models\User::factory()->create([
            'username' => 'e',
            'role' => 'employee',
            'name' => 'e',
            'email' => 'e@e',
            'password' => Hash::make('eeeeeeee'),
        ]);

        \App\Models\User::factory()->create([
            'username' => 'o',
            'role' => 'owner',
            'name' => 'o',
            'email' => 'o@o',
            'password' => Hash::make('oooooooo'),
        ]);
    }
}
