<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\support\Facades\DB;

class CarsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('cars')->insert([
            [
                'name' => 'Toyota Corolla',
                'type' => 'Sedan',
                'price' => 20000,
                'year' => '2015',
                'manufacture_id' => 1,
            ],
            [
                'name' => 'Honda Civic',
                'type' => 'Sedan',
                'price' => 22000,
                'year' => '2021',
                'manufacture_id' => 2,
            ],
            [
                'name' => 'Ford F-150',
                'type' => 'Truck',
                'price' => 30000,
                'year' => '2019',
                'manufacture_id' => 3,
            ],
        ]);
    }
}
