<?php

namespace Database\Seeders;

use App\Models\Company;
use App\Models\User;
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
        User::factory(10)->create();

        User::factory()->create([
            'name' => 'Ferdy Admin',
            'email' => 'aferdy36@gmail.com',
            'password' => Hash::make('12345678'),
        ]);

        // data dummy for company
        Company::create([
            'name' => 'PT. FIC16',
            'email' => 'fic16@gmail.com',
            'address' => 'Jl. Raya Ciledug, Ciledug, Kec. Ciledug, Kab. Bogor',
            'latitude' => '-7.3048',
            'longitude' => '109.1573',
            'radius_km' => '0.5',
            'time_in' => '08:00',
            'time_out' => '17:00',
        ]);

        $this->call([
            AttendanceSeeder::class,
            PermissionSeeder::class,
        ]);
    }
}
