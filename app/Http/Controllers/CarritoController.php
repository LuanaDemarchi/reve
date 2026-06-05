<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Venta;
use App\Models\DetalleVenta;
use App\Models\Producto;


class CarritoController extends Controller
{
    public function verCarrito()
    {
        $carrito = session()->get('carrito', []);
        
        // Sanitiza items viejos que no tienen 'imagen'
        foreach ($carrito as $id => $item) {
            if (!array_key_exists('imagen', $item)) {
                $carrito[$id]['imagen'] = null;
            }
        }
        session()->put('carrito', $carrito);

        $total = 0;
        foreach ($carrito as $item) {
            $total += $item['precio'] * $item['cantidad'];
        }

        return view('carrito.index', compact('carrito', 'total'));
    }

   public function agregar(Request $request, $id)
    {
        $producto = Producto::find($id);
        if (!$producto) return redirect()->back()->with('error', 'Producto no encontrado.');

        // Si el stock es 0 o menor, lo mandamos directo al carrito con el aviso
        if ($producto->stock <= 0) {
            return redirect()->route('carrito.index')->with('sin_stock', true);
        }

        $carrito = session()->get('carrito', []);
        
        if (isset($carrito[$id])) {
            $carrito[$id]['cantidad']++;
        } else {
            $carrito[$id] = [
                "nombre"   => $producto->nombre,
                "cantidad" => 1,
                "precio"   => $producto->precio,
                "imagen"   => $producto->url_imagen 
            ];
        }
        session()->put('carrito', $carrito);
        return redirect()->back()->with('success', 'Producto agregado!');
    }

    public function quitar($id)
{
    $carrito = session()->get('carrito', []);
    
    if (isset($carrito[$id])) {
        unset($carrito[$id]);
        session()->put('carrito', $carrito);
    }

    return redirect()->route('carrito.index')->with('success', 'Producto eliminado del carrito.');
}

    // Al tocar "Confirmar Compra" en el carrito
    public function confirmar()
    {
        $carrito = session()->get('carrito', []);
        if (empty($carrito)) {
            return redirect()->route('carrito.index')->with('error', 'El carrito está vacío.');
        }

        $total = 0;
        foreach ($carrito as $item) {
            $total += $item['precio'] * $item['cantidad'];
        }

        return view('carrito.checkout', compact('carrito', 'total'));
    }

    // Al enviar el formulario de datos, procesamos la compra
    public function procesar(Request $request)
    {
        $carrito = session()->get('carrito', []);
        if (empty($carrito)) {
            return redirect()->route('carrito.index')->with('error', 'El carrito está vacío.');
        }

        DB::transaction(function () use ($request, $carrito) {
            
            $total = 0;
            foreach ($carrito as $item) {
                $total += $item['precio'] * $item['cantidad'];
            }

            // 💡 CORREGIDO: Evitamos valores NULL si el formulario viene vacío
            $venta = Venta::create([
                'cliente_id' => auth()->id(),
                'total'      => $total,
                'estado'     => 'Pendiente',
                'direccion'  => $request->input('direccion') ?? 'Retira en local',
                'telefono'   => $request->input('telefono') ?? 'Sin teléfono',
            ]);

            foreach ($carrito as $id => $item) {
                $producto = Producto::find($id);

                DetalleVenta::create([
                    'venta_id'        => $venta->id,
                    'producto_id'     => $id,
                    'cantidad'        => $item['cantidad'],
                    'precio_unitario' => $item['precio'],
                    'subtotal'        => $item['precio'] * $item['cantidad']
                ]);

                if ($producto) {
                    $producto->stock -= $item['cantidad'];
                    $producto->save();
                }
            }

            $ticket = [
                'nro_pedido'  => 'N° ' . $venta->id,
                'fecha'       => $venta->created_at->format('d/m/Y H:i'),
                'cliente'     => auth()->user()->name,
                'telefono'    => $request->input('telefono') ?? 'Sin teléfono',
                'direccion'   => $request->input('direccion') ?? 'Retira en local',
                'metodo_pago' => $request->input('metodo_pago') ?? 'No especificado',
                'productos'   => $carrito,
                'total'       => $total
            ];

            session()->put('ultimo_ticket', $ticket);
            session()->forget('carrito');
        });

        return redirect()->route('carrito.comprobante');
    }

    // Muestra la pantalla del comprobante final
    public function comprobante()
    {
        $ticket = session()->get('ultimo_ticket');

        if (!$ticket) {
            return redirect('/productos')->with('error', 'No se encontró ningún comprobante reciente.');
        }

        return view('carrito.ticket', compact('ticket'));
    }
}