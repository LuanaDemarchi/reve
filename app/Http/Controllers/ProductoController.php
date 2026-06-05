<?php

namespace App\Http\Controllers;

use App\Models\Producto;
use Illuminate\Http\Request;

class ProductoController extends Controller
{
    public function index()
    {
        $productos = Producto::all();

        return view('admin.productos.index', compact('productos'));
    }

    public function create()
    {
        return view('admin.productos.create');
    }

    public function store(Request $request)
{
    $producto = new Producto();
    $producto->nombre = $request->nombre;
    $producto->descripcion = $request->descripcion ?? 'Sin descripción'; // Si llega vacío le pone un texto
    $producto->precio = $request->precio;
    $producto->stock = $request->stock;
    $producto->activo = true;

    // 💡 SOLUCIÓN AL ERROR DE LA FOTO:
    // Si el formulario no manda categoría, le asignamos 'roll' por defecto para que no sea NULL
    if ($request->has('categoria') && !empty($request->categoria)) {
        $producto->categoria = strtolower($request->categoria); // Lo pasa a minúscula ('roll', 'cookie', 'torta')
    } else {
        $producto->categoria = 'roll'; 
    }

    // Solución para la imagen
    if ($request->has('url_imagen')) {
        $producto->url_imagen = $request->url_imagen;
    } elseif ($request->has('imagen')) {
        $producto->url_imagen = $request->imagen;
    }

    $producto->save();

    return redirect('/admin/productos');
}

    public function edit(Producto $producto)
    {
        return view('admin.productos.edit', compact('producto'));
    }

    public function update(Request $request, Producto $producto)
{
    $producto->nombre = $request->nombre;
    $producto->descripcion = $request->descripcion;
    $producto->precio = $request->precio;
    $producto->stock = $request->stock;
    $producto->categoria = $request->categoria;
    $producto->activo = $request->activo;

    if ($request->filled('url_imagen')) {
        $producto->url_imagen = $request->url_imagen;
    }

    $producto->save();

    return redirect('/admin/productos')
        ->with('success', 'Producto actualizado correctamente');
}

    public function destroy(Producto $producto)
    {
        $producto->delete();

        return redirect('/admin/productos');
    }

    public function publico()
    {
        $rolls   = Producto::where('activo', true)->where('categoria', 'roll')->get();
        $cookies = Producto::where('activo', true)->where('categoria', 'cookie')->get();
        $tortas  = Producto::where('activo', true)->where('categoria', 'torta')->get();

        return view('productos', compact('rolls', 'cookies', 'tortas'));
    }
}