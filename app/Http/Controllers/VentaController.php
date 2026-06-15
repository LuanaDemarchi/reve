<?php

namespace App\Http\Controllers;

use App\Models\Venta;
use Illuminate\Http\Request;

class VentaController extends Controller
{
    public function index()
{
    $ventas = Venta::with([
        'cliente',
        'detalles.producto'
    ])
    ->orderBy('created_at','desc')
    ->get();


    return view('admin.ventas.index', compact('ventas'));
}

    public function cambiarEstado(Request $request, $id)
    {
        $venta = Venta::findOrFail($id);
        $venta->estado = $request->input('estado');
        $venta->save();

        return redirect('/admin/ventas')->with('success', 'Estado actualizado correctamente.');
    }
}
