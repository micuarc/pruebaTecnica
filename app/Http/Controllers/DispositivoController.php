<?php

namespace App\Http\Controllers;

use App\Models\Dispositivo;
use Illuminate\Http\Request;

class DispositivoController extends Controller
{
    public function listar(Request $request)
    {
        // dd($request->all());
        $dispositivo = Dispositivo::select('idDispositivo', 'nombreDispositivo', 'nombreModelo', 'nombreMarca', 'nombreBodega')
            ->join('bodega', 'dispositivo.idBodega', '=', 'bodega.idBodega')
            ->join('modelo', 'modelo.idModelo', '=', 'dispositivo.idModelo')
            ->join('marca', 'modelo.idMarca', '=', 'marca.idMarca')
            ->when($request->idDispositivo, function ($query, $idDispositivo) {
                $query->where('idDispositivo', $idDispositivo);
            })
            ->when($request->idBodega, function ($query, $idBodega) {
                $query->where('dispositivo.idBodega', $idBodega);
            })
            ->when($request->idModelo, function ($query, $idModelo) {
                $query->where('dispositivo.idModelo', $idModelo);
            })
            ->when($request->idMarca, function ($query, $idMarca) {
                $query->where('modelo.idMarca', $idMarca);
            })
            ->get();
        return response()->json(['datos' => $dispositivo]);
    }

    public function agregar(Request $request)
    {
        $dispositivo = Dispositivo::create([
            'idModelo' => $request->idModelo,
            'idBodega' => $request->idBodega,
            'nombreDispositivo' => $request->nombreDispositivo,
        ]);
        return response()->json(['datos' => $dispositivo]);
    }
}
