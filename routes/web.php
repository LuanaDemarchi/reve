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