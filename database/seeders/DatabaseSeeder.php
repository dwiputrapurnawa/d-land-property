<?php

namespace Database\Seeders;

use App\Models\Company;
use App\Models\LandingPage;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::create([
            'name' => 'Administrator',
            'username' => 'admin',
            'password' => bcrypt('dlandweb2024'),
            'role' => 'admin',
        ]);

        Company::create([
            'name' => "D'Land Property",
            'address' => "Jalan Raya Kampus Udayana No. 18x Jimbaran, Kuta Selatan, Badung 80361",
            'phone' => "+6212345678910",
            'email' => "info.dlandproperty@gmail.com",
            'logo' => "/images/logo.png",
            'instagram' => "https://www.instagram.com/dland.property/",
        ]);

        $this->call([PhoneCountryCodeSeeder::class]);
    }
}
