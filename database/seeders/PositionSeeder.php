<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PositionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('positions')->insert([
            [
                'code' => 'kg',
                'name' => 'kilogram',
            ],
            [
                'code' => 'lt',
                'name' => 'liter',
            ],
            [
                'code' => 'pcs',
                'name' => 'unit',
            ],
        ]);
    }
}
