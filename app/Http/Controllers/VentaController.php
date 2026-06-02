<?php

namespace App\Http\Controllers;

use App\Models\Venta;

class VentaController extends Controller
{
    public function index()
    {
        $ventas = Venta::with('cliente')->get();

        return view('admin.ventas.index', compact('ventas'));
    }
}
