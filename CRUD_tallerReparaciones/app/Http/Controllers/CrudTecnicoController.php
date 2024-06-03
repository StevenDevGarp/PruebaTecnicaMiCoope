<?php

namespace App\Http\Controllers;

use App\Models\tecnico;
use Illuminate\Http\Request;

class CrudTecnicoController extends Controller
{

//GET
    public function obtenerServiciosPorTecnico($id)
    {
        $tecnico = Tecnico::with('servicios.cliente', 'servicios.equipo.marca')->findOrFail($id);
        return response()->json($tecnico->servicios);
    }
//POST    
    public function crearTecnico(Request $request)
    {
        $validatedData = $request->validate([
            'nombre' => 'required|string|max:100',
            'telefono' => 'nullable|string|max:20',
            'email' => 'nullable|email|max:100',
        ]);

        $tecnico = Tecnico::create($validatedData);

        return response()->json($tecnico, 201);
    }
//UPDATE
    public function actualizarTecnico(Request $request, $id)
    {
        $validatedData = $request->validate([
            'nombre' => 'required|string|max:100',
            'telefono' => 'nullable|string|max:20',
            'email' => 'nullable|email|max:100',
        ]);

        $tecnico = Tecnico::findOrFail($id);
        $tecnico->update($validatedData);

        return response()->json($tecnico, 200);
    }
}
