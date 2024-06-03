<?php

namespace App\Http\Controllers;

use App\Models\marca;
use App\Models\equipo;
use Illuminate\Http\Request;

class CrudPruebaController extends Controller
{
    public function crearMarca(Request $request)
    {
        $validatedData = $request->validate([
            'nombre' => 'required|string|max:50',
        ]);

        $marca = marca::create($validatedData);

        return response()->json($marca, 201);
    }

    public function crearEquipo(Request $request)
    {
        $validatedData = $request->validate([
            'tipo' => 'required|string|max:50',
            'modelo' => 'nullable|string|max:50',
            'marca_id' => 'required|exists:marcas,marca_id',
        ]);

        $equipo = Equipo::create($validatedData);

        return response()->json($equipo, 201);
    }
}


