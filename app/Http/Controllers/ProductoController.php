<?php

namespace App\Http\Controllers;

use App\Models\Producto;
use Illuminate\Http\Request;
use App\Http\Requests\ProductoRequest;

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

 public function store(ProductoRequest $request)
{

    $producto = new Producto();


    $producto->nombre = $request->nombre;
    $producto->descripcion = $request->descripcion;
    $producto->precio = $request->precio;
    $producto->stock = $request->stock;
    $producto->categoria = $request->categoria;
    $producto->activo = $request->activo ?? 0;



    // GUARDAR IMAGEN EN STORAGE

    if($request->hasFile('imagen')){

        $ruta = $request->file('imagen')
        ->store('productos','public');

        $producto->url_imagen = $ruta;

    }


    $producto->save();


    return redirect('/admin/productos')
    ->with('success','Producto creado correctamente');

}
    public function edit(Producto $producto)
    {
        return view('admin.productos.edit', compact('producto'));
    }

   public function update(ProductoRequest $request, Producto $producto)
{
    $producto->nombre = $request->nombre;
    $producto->descripcion = $request->descripcion;
    $producto->precio = $request->precio;
    $producto->stock = $request->stock;
    $producto->categoria = $request->categoria;
    $producto->activo = $request->activo;

    if($request->hasFile('imagen')){

    $ruta = $request->file('imagen')
        ->store('productos','public');

    $producto->url_imagen = $ruta;

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