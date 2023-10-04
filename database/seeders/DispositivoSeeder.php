<?php

namespace Database\Seeders;

use App\Models\Dispositivo;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DispositivoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $dispositivos = [
            ['idModelo' => 5, 'idBodega' => 3, 'nombreDispositivo' => '156A'],
            ['idModelo' => 1, 'idBodega' => 2, 'nombreDispositivo' => '24RY'],
            ['idModelo' => 2, 'idBodega' => 2, 'nombreDispositivo' => '87VS'],
            ['idModelo' => 3, 'idBodega' => 4, 'nombreDispositivo' => '965P'],
            ['idModelo' => 2, 'idBodega' => 1, 'nombreDispositivo' => '151X'],
        ];

        Dispositivo::insert($dispositivos);
    }
}
