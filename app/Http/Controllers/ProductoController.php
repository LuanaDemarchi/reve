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
    
    // 💡 DETECTOR AUTOMÁTICO: Si no viene categoría, la deduce por el nombre
    if ($request->has('categoria') && !empty($request->categoria)) {
        $producto->categoria = strtolower($request->categoria);
    } else {
        $nombreBajo = strtolower($request->nombre);

        if (str_contains($nombreBajo, 'torta') || str_contains($nombreBajo, 'choco') || str_contains($nombreBajo, 'cake')) {
            $producto->categoria = 'torta';
        } elseif (str_contains($nombreBajo, 'cookie') || str_contains($nombreBajo, 'galleta') || str_contains($nombreBajo, 'pepita')) {
            $producto->categoria = 'cookie';
        } else {
            $producto->categoria = 'roll';
        }
    }

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
    // IDs más vendidos por categoría (top 3 de cada una)
    $idsRolls = \App\Models\DetalleVenta::whereHas('producto', fn($q) => $q->where('categoria', 'roll'))
        ->selectRaw('producto_id, SUM(cantidad) as total_vendido')
        ->groupBy('producto_id')
        ->orderByDesc('total_vendido')
        ->limit(3)
        ->pluck('producto_id');

    $idsCookies = \App\Models\DetalleVenta::whereHas('producto', fn($q) => $q->where('categoria', 'cookie'))
        ->selectRaw('producto_id, SUM(cantidad) as total_vendido')
        ->groupBy('producto_id')
        ->orderByDesc('total_vendido')
        ->limit(3)
        ->pluck('producto_id');

    $idsTortas = \App\Models\DetalleVenta::whereHas('producto', fn($q) => $q->where('categoria', 'torta'))
        ->selectRaw('producto_id, SUM(cantidad) as total_vendido')
        ->groupBy('producto_id')
        ->orderByDesc('total_vendido')
        ->limit(3)
        ->pluck('producto_id');

    // Si no hay ventas aún, mostrar los primeros 3 de cada categoría
    $rolls   = $idsRolls->isEmpty()
        ? \App\Models\Producto::where('categoria', 'roll')->where('activo', true)->limit(3)->get()
        : \App\Models\Producto::whereIn('id', $idsRolls)->where('activo', true)->get();

    $cookies = $idsCookies->isEmpty()
        ? \App\Models\Producto::where('categoria', 'cookie')->where('activo', true)->limit(3)->get()
        : \App\Models\Producto::whereIn('id', $idsCookies)->where('activo', true)->get();

    $tortas  = $idsTortas->isEmpty()
        ? \App\Models\Producto::where('categoria', 'torta')->where('activo', true)->limit(3)->get()
        : \App\Models\Producto::whereIn('id', $idsTortas)->where('activo', true)->get();

    return view('productos', compact('rolls', 'cookies', 'tortas'));
}

    public function novedades()
{
    // Trae los últimos 6 productos agregados que estén activos
    $novedades = Producto::where('activo', true)
        ->latest() // Los ordena del más nuevo al más viejo
        ->take(6)  // Toma un máximo de 6 para destacar
        ->get();

    return view('novedades', compact('novedades'));
}
}