<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductoController;
use App\Http\Controllers\VentaController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\CarritoController;

// --- VISTAS INICIALES / ESTÁTICAS ---
Route::get('/', function () { return view('inicio'); });
Route::get('/informacion', function () { return view('informacion'); });
Route::get('/quienes_somos', function () { return view('quienes_somos'); });
Route::get('/contacto', function () { return view('contacto'); });
Route::get('/terminos', function () { return view('terminos'); });
Route::get('/cookies', function () { return view('cookies'); });
Route::get('/tortas', function () { return view('tortas'); });
Route::get('/rolls', function () { return view('rolls'); });

// 🔔 CONEXIÓN REAL DEL CATÁLOGO DE PRODUCTOS:
// Ahora pasa por el método 'publico' del controlador para traer los datos reales de HeidiSQL
Route::get('/productos', [ProductoController::class, 'publico'])->name('productos.publico');


// --- AUTENTICACIÓN (LOGIN / REGISTRO) ---
Route::get('/login', [AuthController::class, 'showLogin'])->name('login');
Route::post('/login', [AuthController::class, 'login']);
Route::get('/registro', [AuthController::class, 'showRegister'])->name('registro');
Route::post('/registro', [AuthController::class, 'register']);
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
Route::post('/contacto', [AuthController::class, 'store_contact'])->name('contacto.store');


// --- PANEL DE ADMINISTRACIÓN (ADMIN) ---
Route::get('/admin', [AdminController::class, 'index'])->name('admin.index');
Route::get('/admin/usuarios', [AdminController::class, 'usuarios'])->name('admin.usuarios');
Route::get('/admin/consultas', [AdminController::class, 'consultas'])->name('admin.consultas');
Route::delete('/admin/consultas/{id}', [AdminController::class, 'destruirConsulta'])->name('admin.consultas.destroy');
Route::get('/admin/ventas', [VentaController::class, 'index']);

// CRUD de Productos en Admin
Route::get('/admin/productos', [ProductoController::class, 'index']);
Route::get('/admin/productos/create', [ProductoController::class, 'create']);
Route::post('/admin/productos', [ProductoController::class, 'store']);
Route::get('/admin/productos/{producto}/edit', [ProductoController::class, 'edit']);
Route::put('/admin/productos/{producto}', [ProductoController::class, 'update']);
Route::delete('/admin/productos/{producto}', [ProductoController::class, 'destroy']);


// --- CARRITO DE COMPRAS ---
Route::get('/carrito', [CarritoController::class, 'verCarrito'])->name('carrito.index');
Route::post('/carrito/agregar/{id}', [CarritoController::class, 'agregar'])->name('carrito.agregar');
Route::delete('/carrito/quitar/{id}', [CarritoController::class, 'quitar'])->name('carrito.quitar');

// Rutas del carrito protegidas (requieren estar logueado)
Route::middleware(['auth'])->group(function () {
    Route::post('/carrito/confirmar', [CarritoController::class, 'confirmar'])->name('carrito.confirmar');
    Route::post('/carrito/procesar', [CarritoController::class, 'procesar'])->name('carrito.procesar');
    Route::get('/carrito/comprobante', [CarritoController::class, 'comprobante'])->name('carrito.comprobante');
});

Route::get('/admin/ventas', [VentaController::class, 'index']);
Route::put('/admin/ventas/{id}/estado', [VentaController::class, 'cambiarEstado']);
Route::put('/admin/consultas/{id}/responder', [\App\Http\Controllers\AdminController::class, 'responderConsulta'])->name('admin.consultas.responder');
Route::get('/mis-compras', [CarritoController::class, 'misCompras'])->name('mis.compras');
// Ruta para la sección de novedades destacadas
Route::get('/novedades', [ProductoController::class, 'novedades'])->name('productos.novedades');