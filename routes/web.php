<?php

use App\Http\Controllers\PrestadoresController;
use App\Http\Controllers\SolicitudController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\EmpleadoController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GendeOfController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\GenDeCreController;
use App\Http\Controllers\HorasController;
use App\Http\Controllers\ReportesController;
use App\Http\Controllers\AupagoController;
use App\Http\Controllers\CatalogoController;
use App\Http\Controllers\GeneradorController;
use App\Http\Controllers\ImpresionPDFController;
use App\Http\Controllers\reportes;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

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

// Route::get('/aupago', function () {
//     return view('aupago');
// });
Route::get('/aupago', [AupagoController::class, 'index'])->name('aupago.index');

// Route::get('/reportes', function () {
//     return view('reportes');
// });

Route::get('/reportes',[reportesController::class, 'index'])->name('reportes.index');


Route::get('/horas', function () {
    return view('horas');
});
Route::get('/horas', [HorasController::class, 'index'])->name('horas.index');

// Route::get('/gendeof', function () {
//     return view('gendeof');
// });
Route::get('/gendeof', [GendeOfController::class, 'index'])->name('gendeof.index');

// Route::get('/gendecre', function () {
//     return view('gendecre');
// });
Route::get('/gendecre', [GenDeCreController::class, 'index'])->name('gendecre.index');

Route::get('/catalogos', [CatalogoController::class, 'index'])->name('catalogo.index');

 Route::get('/solicitudes', [SolicitudController::class, 'index'])->name('solicitud.index');

// Route::get('/solicitudes', [SolicitudController::class, 'index'])->name('solicitud.index');

//Route::get('/solicitudes', [SolicitudController::class, 'index']);

// Ruta para crear la solicitud de servicio social y practicas profesionales
Route::post('/solicitudes/create', [SolicitudController::class, 'store'])->name('solicitud.store');

Route::get('/empleados', [EmpleadoController::class, 'index'])->name('empleado.index');
Route::get('/empleados/consulta', [EmpleadoController::class, 'search'])->name('empleado.search');
Route::post('/empleados/busqueda', [EmpleadoController::class, 'do_search'])->name('empleado.do.search');
Route::get('/empleados/consulta/{empleado}', [EmpleadoController::class, 'show'])->name('empleado.show');
Route::delete('/empleados/{empleado}', [EmpleadoController::class, 'destroy'])->name('empleado.destroy');
Route::get('/empleados/{empleado}/edit', [EmpleadoController::class, 'edit'])->name('empleado.edit');

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard.index');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');     
});

require __DIR__.'/auth.php';
