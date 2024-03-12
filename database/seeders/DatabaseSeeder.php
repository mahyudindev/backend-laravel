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
         \App\Models\User::factory(10)->create();

        \App\Models\User::factory()->create([
            'name' => 'ydtm',
            'email' => 'ydtm@admin.com',
            'role' => 'admin',
            'password' => Hash::make('120600'),
            'phone' => '082121212',
        ]);
    }
}
