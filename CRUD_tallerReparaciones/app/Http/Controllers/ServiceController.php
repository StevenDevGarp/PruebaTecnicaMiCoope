<?php

namespace App\Http\Controllers;

use App\Models\servicio;
use App\Models\cliente;
use App\Models\tecnico;
use App\Models\equipo;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $services = Servicio::with(['cliente', 'equipo.marca', 'tecnico'])->get();
        return view('services.index', compact('services'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $clientes = Cliente::all();
        $equipos = Equipo::with('marca')->get();
        $tecnicos = Tecnico::all();
        return view('services.create', compact('clientes', 'equipos', 'tecnicos'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
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

        Servicio::create($validatedData);

        return redirect()->route('servicios.index')->with('success', 'Servicio creado exitosamente.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $servicio = Servicio::findOrFail($id);
        $clientes = Cliente::all();
        $equipos = Equipo::with('marca')->get();
        $tecnicos = Tecnico::all();
        return view('services.edit', compact('servicio', 'clientes', 'equipos', 'tecnicos'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
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

        return redirect()->route('servicios.index')->with('success', 'Servicio actualizado exitosamente.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $servicio = Servicio::findOrFail($id);
        $servicio->delete();

        return redirect()->route('servicios.index')->with('success', 'Servicio eliminado exitosamente.');
    }
}
