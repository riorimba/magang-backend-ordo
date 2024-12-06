<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CarFeaturesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('car_features')->insert([
            [
                'car_id' => 1,
                'feature_id' => 1,
            ],
            [
                'car_id' => 2,
                'feature_id' => 1,
            ],
            [
                'car_id' => 1,
                'feature_id' => 3,
            ],
        ]);
    }
}
