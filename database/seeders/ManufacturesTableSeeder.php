<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ManufacturesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('manufactures')->insert([
            [
                'name' => 'Toyota',
                'address' => 'JPN',
            ],
            [
                'name' => 'Honda',
                'address' => 'JPN',
            ],
            [
                'name' => 'Ford',
                'address' => 'USA',
            ],
        ]);
    }
}
