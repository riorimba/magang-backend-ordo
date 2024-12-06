<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FeaturesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('features')->insert([
            [
                'id' => 1,
                'name' => 'Seat Heater',
            ],
            [
                'id' => 2,
                'name' => 'Parkir Camera',
            ],
            [
                'id' => 3,
                'name' => 'Keyless Entry',
            ],
            [
                'id' => 4,
                'name' => 'TURBO',
            ],
            [
                'id' => 5,
                'name' => 'LED Headlights',
            ],
        ]);
    }
}
