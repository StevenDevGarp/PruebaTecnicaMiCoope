<?php

use App\Http\Controllers\ClienteController;
use App\Http\Controllers\ServiceController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


route::resource('clients', ClienteController::class);
Route::get('/servicios', [ServiceController::class, 'index'])->name('servicios.index');
Route::get('/servicios/crear', [ServiceController::class, 'create'])->name('servicios.create');
Route::post('/servicios', [ServiceController::class, 'store'])->name('servicios.store');
Route::get('/servicios/{id}/editar', [ServiceController::class, 'edit'])->name('servicios.edit');
Route::put('/servicios/{id}', [ServiceController::class, 'update'])->name('servicios.update');
Route::delete('/servicios/{id}', [ServiceController::class, 'destroy'])->name('servicios.destroy');