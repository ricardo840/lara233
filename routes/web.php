<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\CategoryWebController;
use App\Http\Controllers\ProductWebController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ctrlDatos;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::resource('categories', CategoryWebController::class)->except(['show']);
    Route::resource('products', ProductWebController::class)->except(['show']);

    
    Route::get('/datos', [ctrlDatos::class, 'AccesoDatosVista']);

    Route::get('/hosting', [ctrlDatos::class, 'AccesoHostingVista'])->name('hosting');

    Route::get('/pokemon-detalles/{id}', [ctrlDatos::class, 'AccesoPokemonDetallesVista'])->name('pokemon-detalles');
});

require __DIR__.'/auth.php';




