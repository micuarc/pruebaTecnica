<?php

namespace Database\Seeders;

use App\Models\Modelo;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ModeloSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $modelos = [
            ['idMarca' => 2, 'nombreModelo' => 'Don Gato'],
            ['idMarca' => 2, 'nombreModelo' => 'Garfield'],
            ['idMarca' => 2, 'nombreModelo' => 'Gato Felix'],
            ['idMarca' => 1, 'nombreModelo' => 'Don Graf'],
            ['idMarca' => 1, 'nombreModelo' => 'Patan'],
            ['idMarca' => 1, 'nombreModelo' => 'Lassie']
        ];

        Modelo::insert($modelos);
    }
}
