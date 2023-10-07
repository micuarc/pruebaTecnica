<?php

namespace App\Http\Controllers;

use App\Models\Bodega;
use Illuminate\Http\Request;

class BodegaController extends Controller
{
    public function listar(Request $request)
    {
        $bodega = Bodega::select('idBodega', 'nombreBodega')
            ->when($request->idBodega, function ($query, $idBodega) {
                $query->where('idBodega', $idBodega);
            })->get();
        return response()->json(['datos' => $bodega]);
    }
}
