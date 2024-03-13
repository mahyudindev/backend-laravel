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

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        \App\Models\User::factory()->create([
            'name' => 'YDTM',
            'email' => 'ydtm@admin.com',
            'role' => 'admin',
            'password' => Hash::make('120600'),
            'phone' => '1234567890',
        ]);

        //seeder profile_clinics manual
        \App\Models\ProfileClinic::factory()->create([
            'name' => 'Klinik YDTM',
            'address' => 'Jl. Raya Ciputat Parung No. 1',
            'phone' => '1234567890',
            'email' => 'dr.yudi@klinik.com',
            'doctor_name' => 'Dr. Yudi',
            'unique_code' => '123456',
        ]);

        //call
        $this->call(DoctorSeeder::class);
    }
}
