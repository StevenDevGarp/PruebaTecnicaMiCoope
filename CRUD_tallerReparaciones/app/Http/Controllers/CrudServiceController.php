<?php

namespace App\Http\Controllers;

use App\Models\cliente;
use App\Models\servicio;
use App\Models\marca;
use App\Models\tecnico;
use Illuminate\Http\Request;

class CrudServiceController extends Controller
{

//GET
    public function obtenerServicios(){
        return servicio::all();
    }

    public function obtenerServicio($id)
    {
        $servicio = servicio::with(['cliente', 'equipo.marca', 'tecnico'])
                            ->findOrFail($id);

        return response()->json($servicio);
    }

//POST    
    public function crearServicio(Request $request)
    {
        $validatedData = $request->validate([
            'cliente_id' => 'required|exists:cliente,cliente_id',
            'equipo_id' => 'required|exists:equipo,equipo_id',
            'tecnico_id' => 'required|exists:tecnico,tecnico_id',
            'fecha_recepcion' => 'required|date',
            'problema' => 'required|string|max:255',
            'diagnostico' => 'nullable|string',
            'solucion' => 'nullable|string',
            'estado' => 'required|in:recibido,reparando,finalizado,entregado',
        ]);

        $servicio = servicio::create($validatedData);

        return response()->json($servicio, 201);
    }

//UPDATE
    public function actualizarServicio(Request $request, $id)
    {
        $validatedData = $request->validate([
            'cliente_id' => 'required|exists:cliente,cliente_id',
            'equipo_id' => 'required|exists:equipo,equipo_id',
            'tecnico_id' => 'required|exists:tecnico,tecnico_id',
            'fecha_recepcion' => 'required|date',
            'problema' => 'required|string|max:255',
            'diagnostico' => 'nullable|string',
            'solucion' => 'nullable|string',
            'estado' => 'required|in:recibido,reparando,finalizado,entregado',
        ]);

        $servicio = Servicio::findOrFail($id);
        $servicio->update($validatedData);

        return response()->json($servicio, 200);
    }

//DELETE

    public function eliminarServicio($id)
    {
        $servicio = Servicio::findOrFail($id);
        $servicio->delete();

        return response()->json(['message' => 'Servicio eliminado correctamente'], 200);
    } 
}
