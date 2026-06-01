<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;     // Para listar los usuarios
use App\Models\Contacto; // Para listar las consultas (¡Importado!)

class AdminController extends Controller
{
    // 1. Pantalla principal del Panel de Admin (Ya no se usa tanto por la barra, pero la dejamos por seguridad)
    public function index()
    {
        if (!auth()->check() || auth()->user()->rol !== 'admin') {
            return redirect('/')->with('error', 'No tienes permisos para acceder.');
        }

        return view('admin.dashboard');
    }

    // 2. Listar productos 
    public function productos()
    {
        if (!auth()->check() || auth()->user()->rol !== 'admin') {
            return redirect('/');
        }

        // Acá después se traerán los productos de la BD: $productos = Product::all();
        return view('admin.productos.index');
    }

    // 3. Visualizar Usuarios Registrados
    public function usuarios()
    {
        if (!auth()->check() || auth()->user()->rol !== 'admin') {
            return redirect('/')->with('error', 'No tienes acceso.');
        }

        // Trae los usuarios reales de la base de datos
        $usuarios = User::all();

        return view('admin.usuarios', compact('usuarios'));
    }

    // 4. Visualizar Consultas del Formulario de Contacto
    public function consultas()
    {
        // Bloqueo de seguridad para que solo entre el admin
        if (!auth()->check() || auth()->user()->rol !== 'admin') {
            return redirect('/')->with('error', 'No tienes acceso.');
        }

        // Traemos todas las consultas de la base de datos, de la más nueva a la más vieja
        $consultas = Contacto::latest()->get();

        return view('admin.consultas', compact('consultas'));
    }

    
    public function destruirConsulta($id)
   {
    // Bloqueo de seguridad por código
    if (!auth()->check() || auth()->user()->rol !== 'admin') {
        return redirect('/')->with('error', 'No tienes acceso.');
    }

    // Buscamos la consulta por su ID; si no existe, tira error 404
    $consulta = Contacto::findOrFail($id);
    
    // La eliminamos de la base de datos
    $consulta->delete();

    // Volvemos atrás con un mensajito de éxito
    return redirect()->back()->with('success_message', 'La consulta ha sido eliminada correctamente.');
   }
}