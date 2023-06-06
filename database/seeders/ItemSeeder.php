<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ItemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('items')->insert([
            [
                'nameitem' => 'Sepatu',
                'priceitem'=> 250000,
                'descriptionitem' => 'Sepatu Vans ini keluaran tahun 2023',
                'amount' => 25,
                'position_id' => 3
            ],
        ]);
    }
}
