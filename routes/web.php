<?php
use App\Http\Controllers\PrestadoresController;
use App\Http\Controllers\SolicitudController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\EmpleadoController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/prestadores', function () {
    return view('prestadores');
});

Route::get('/catalogos', function () {
    return view('catalogos');
});

Route::get('/solicitudes', function () {
    return view('Solicitud');
});

//Route::get('/solicitudes', [SolicitudController::class, 'index']);

Route::get('/empleados', [EmpleadoController::class, 'index']);

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');     
});

require __DIR__.'/auth.php';
