<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\cliente;

class CrudClientController extends Controller
{

    //GET
        public function obtenerServiciosPorCliente($id)
        {
            $cliente = Cliente::with('servicios.equipo.marca', 'servicios.tecnico')->findOrFail($id);
            return response()->json($cliente->servicios);
        }

        public function obtenerCliente(){
            return cliente::all();
        }

    //POST

        //crear cliente
        public function crearCliente(Request $request)
        {
            $validatedData = $request->validate([
                'nombre' => 'required|string|max:100',
                'telefono' => 'nullable|string|max:20',
                'email' => 'nullable|email|max:100',
            ]);
    
            $cliente = cliente::create($validatedData);
    
            return response()->json($cliente, 201);
        }
    
    //UPDATE

        public function actualizarCliente(Request $request, $id)
        {
            $validatedData = $request->validate([
                'nombre' => 'required|string|max:100',
                'telefono' => 'nullable|string|max:20',
                'email' => 'nullable|email|max:100',
            ]);

            $cliente = Cliente::findOrFail($id);
            $cliente->update($validatedData);

            return response()->json($cliente, 200);
        }

}
