<?php

namespace Database\Seeders;

use App\Models\Bodega;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BodegaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $bodegas = [
            ['nombreBodega' => 'Quinchamali'],
            ['nombreBodega' => 'Lonquimay'],
            ['nombreBodega' => 'Choro Manolo'],
            ['nombreBodega' => 'Princesa Diana'],
        ];

        Bodega::insert($bodegas);
    }
}
