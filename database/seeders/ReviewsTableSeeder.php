<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ReviewsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('reviews')->insert([
            [
                'rating' => 5,
                'name' => 'Andre',
                'comment' => 'Mid car',
                'car_id' => 1,
            ],
            [
                'rating' => 9,
                'name' => 'Simba',
                'comment' => 'Great car',
                'car_id' => 1,
            ],
            [
                'rating' => 8,
                'name' => 'Rio',
                'comment' => 'Okay car',
                'car_id' => 2,
            ],
        ]);
    }
}
