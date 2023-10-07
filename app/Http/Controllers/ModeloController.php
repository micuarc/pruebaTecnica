<?php

namespace App\Http\Controllers;

use App\Models\Modelo;
use Illuminate\Http\Request;

class ModeloController extends Controller
{
    public function listar(Request $request)
    { //id, nombre, marca
        $modelo = Modelo::select('idModelo', 'nombreModelo', 'nombreMarca')
            ->join('marca', 'modelo.idMarca', '=', 'marca.idMarca')
            ->when($request->idModelo, function ($query, $idModelo) {
                $query->where('idModelo', $idModelo);
            })
            ->when($request->idMarca, function ($query, $idMarca) {
                $query->where('modelo.idMarca', $idMarca);
            })
            ->get();
        return response()->json(['datos' => $modelo]);
    }
}
