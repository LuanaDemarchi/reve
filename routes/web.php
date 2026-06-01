<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('inicio');
});

Route::get('/informacion', function () {
    return view('informacion');
});


Route::get('/productos', function () {
    return view('productos');
});

Route::get('/quienes_somos', function () {
    return view('quienes_somos');
});

Route::get('/contacto', function () {
    return view('contacto');
});

Route::get('/terminos', function () {
   return view('terminos');
});

Route::get('/cookies', function () {
   return view('cookies');
});

Route::get('/tortas', function () {
   return view('tortas');
});

Route::get('/rolls', function () {
   return view('rolls');
});

use App\Http\Controllers\AuthController;

// Rutas para Login
Route::get('/login', [AuthController::class, 'showLogin'])->name('login');
Route::post('/login', [AuthController::class, 'login']);

// Rutas para Registro
Route::get('/registro', [AuthController::class, 'showRegister'])->name('registro');
Route::post('/registro', [AuthController::class, 'register']);

// Ruta para Cerrar Sesión
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

// Simplemente agregá esta línea tal cual:
Route::post('/contacto', [\App\Http\Controllers\AuthController::class, 'store_contact'])->name('contacto.store');

Route::get('/admin', [\App\Http\Controllers\AdminController::class, 'index'])->name('admin.index');
Route::get('/admin/usuarios', [\App\Http\Controllers\AdminController::class, 'usuarios'])->name('admin.usuarios');
Route::get('/admin/productos', [\App\Http\Controllers\AdminController::class, 'productos'])->name('admin.productos');
Route::delete('/admin/consultas/{id}', [\App\Http\Controllers\AdminController::class, 'destruirConsulta'])->name('admin.consultas.destroy');
Route::get('/admin/consultas', [\App\Http\Controllers\AdminController::class, 'consultas'])->name('admin.consultas');