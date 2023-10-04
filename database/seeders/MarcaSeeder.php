<?php

namespace Database\Seeders;

use App\Models\Marca;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MarcaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $marcas = [
            ['nombreMarca' => 'Chancho'],
            ['nombreMarca' => 'Cerdo'],
            ['nombreMarca' => 'Puerco']
        ];

        Marca::insert($marcas);
    }
}
