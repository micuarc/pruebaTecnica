<?php

namespace App\Http\Controllers;

use App\Models\Marca;
use Illuminate\Http\Request;

class MarcaController extends Controller
{
    public function listar(Request $request)
    {
        $marca = Marca::select('idMarca', 'nombreMarca')
            ->when($request->idMarca, function ($query, $idMarca) {
                $query->where('idMarca', $idMarca);
            })->get();
        //->where('idMarca', $request->idMarca)
        //->first();

        return response()->json(['datos' => $marca]);
    }
}
