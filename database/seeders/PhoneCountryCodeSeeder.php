<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PhoneCountryCodeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Path to your JSON file
        $jsonFile = database_path('data/phone_country_code.json');

        // Decode the JSON data
        $jsonData = json_decode(file_get_contents($jsonFile), true);

        // Insert data into the table
        DB::table('phone_country_code')->insert($jsonData);
    }
}
