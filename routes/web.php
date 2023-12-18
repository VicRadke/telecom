<?php

use App\Http\Controllers\PrestadoresController;
use App\Http\Controllers\SolicitudController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\EmpleadoController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GendeofController;
use App\Http\Controllers\GendecreController;
use App\Http\Controllers\HorasController;
use App\Http\Controllers\ReportesController;
use App\Http\Controllers\AupagoController;
use App\Http\Controllers\CatalogoController;
use App\Http\Controllers\GeneradorController;
use App\Http\Controllers\ImpresionPDFController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
Route::name('imprimir')->get('/imprimir', [ImpresionPDFController::class, 'imprimir']);

Route::get('/', function () {
    return view('welcome');
    #return dump(config("database"));
});

Route::get('/prestadores', function () {
    return view('prestadores');
});

Route::get('/aupago', function () {
    return view('aupago');
});

Route::get('/reportes', function () {
    return view('reportes');
});

Route::get('/horas', function () {
    return view('horas');
});

Route::get('/gendeof', function () {
    return view('gendeof');
});

Route::get('/gendecre', function () {
    return view('gendecre');
});

Route::get('/catalogos', [CatalogoController::class, 'index'])->name('catalogo.index');

 Route::get('/solicitudes', [SolicitudController::class, 'index'])->name('solicitud.index');

// Route::get('/solicitudes', [SolicitudController::class, 'index'])->name('solicitud.index');

//Route::get('/solicitudes', [SolicitudController::class, 'index']);

// Ruta para crear la solicitud de servicio social y practicas profesionales
Route::get('/solicitudes/create', [SolicitudController::class, 'create'])->name('solicitud.create');

Route::get('/empleados', [EmpleadoController::class, 'index'])->name('empleado.index');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');     
});

require __DIR__.'/auth.php';
