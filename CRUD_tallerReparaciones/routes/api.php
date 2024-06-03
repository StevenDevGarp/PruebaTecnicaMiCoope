<?php

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Controllers\CrudPruebaController;
use App\Http\Controllers\CrudClientController;
use App\Http\Controllers\CrudServiceController;
use App\Http\Controllers\CrudTecnicoController;
use Illuminate\Support\Facades\Route;

Route::get('/students', function () {
    return 'student List';
});


Route::get('/servicio', [CrudServiceController::class, 'obtenerServicios']);
Route::get('/servicios/{id}', [CrudServiceController::class, 'obtenerServicio']);
Route::get('/clientes/{id}/servicios', [CrudClientController::class, 'obtenerServiciosPorCliente']);
Route::get('/tecnicos/{id}/servicios', [CrudTecnicoController::class, 'obtenerServiciosPorTecnico']);
//post 
Route::post('/servicios', [CrudServiceController::class, 'crearServicio']);
Route::post('/clientes', [CrudClientController::class, 'crearCliente']);
Route::post('/marcas', [CrudPruebaController::class, 'crearMarca']);
Route::post('/equipos', [CrudPruebaController::class, 'crearEquipo']);
Route::post('/tecnicos', [CrudTecnicoController::class, 'crearTecnico']);
//Update
Route::put('/clientes/{id}', [CrudClientController::class, 'actualizarCliente']);
Route::put('/servicios/{id}', [CrudServiceController::class, 'actualizarServicio']);
Route::put('/tecnicos/{id}', [CrudTecnicoController::class, 'actualizarTecnico']);
//Delete
Route::delete('/servicios/{id}', [CrudServiceController::class, 'eliminarServicio']);