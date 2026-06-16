@extends('layouts.app')

@section('contenido')

<div class="container" style="padding-top: 180px; padding-bottom: 80px; max-width: 900px;">

    <div class="text-center mb-5">
        <h2 style="font-family: 'Cinzel', serif; color: #4e2d2d; letter-spacing: 2px; font-size: 2.2rem;">
            Mis Pedidos 🎂
        </h2>
        <p class="text-muted" style="font-family: 'Montserrat', sans-serif; font-size: 0.95rem;">
            Acá podés ver el historial de todas tus compras
        </p>
        <div style="width: 60px; height: 3px; background: #8c7a6b; margin: 0 auto; border-radius: 2px;"></div>
    </div>

    @if($ventas->isEmpty())
        <div class="text-center py-5">
            <div style="font-size: 4rem;">🛒</div>
            <p class="fs-5 text-muted mt-3" style="font-family: 'Montserrat', sans-serif;">
                Todavía no realizaste ningún pedido.
            </p>
            <a href="/productos" class="btn btn-dark mt-3 px-5 py-2" style="letter-spacing: 1px; font-size: 0.9rem;">
                VER PRODUCTOS
            </a>
        </div>
    @else
        <div class="d-flex flex-column gap-4">
            @foreach($ventas as $venta)
                <div class="card border-0 shadow-sm rounded-4 overflow-hidden">

                    {{-- Header de la tarjeta --}}
                    <div class="d-flex justify-content-between align-items-center px-4 py-3" 
                         style="background-color: #f8f3ef; border-bottom: 1px solid #e8ddd5;">
                        <div>
                            <span class="fw-bold" style="font-family: 'Cinzel', serif; color: #4e2d2d; font-size: 1rem;">
                                Pedido #{{ $venta->id }}
                            </span>
                            <span class="text-muted small ms-3" style="font-family: 'Montserrat', sans-serif;">
                                📅 {{ $venta->created_at->format('d/m/Y H:i') }}
                            </span>
                        </div>
                        <span class="badge rounded-pill px-3 py-2"
                            style="font-family: 'Montserrat', sans-serif; font-size: 0.78rem;
                            background-color: 
                                {{ $venta->estado == 'Pendiente'      ? '#fff3cd; color: #856404'  : '' }}
                                {{ $venta->estado == 'En preparación' ? '#cff4fc; color: #055160'  : '' }}
                                {{ $venta->estado == 'Enviado'        ? '#cfe2ff; color: #084298'  : '' }}
                                {{ $venta->estado == 'Entregado'      ? '#d1e7dd; color: #0a3622'  : '' }}
                                {{ $venta->estado == 'Cancelado'      ? '#f8d7da; color: #842029'  : '' }}
                            ">
                            @if($venta->estado == 'Pendiente') ⏳
                            @elseif($venta->estado == 'En preparación') 👩‍🍳
                            @elseif($venta->estado == 'Enviado') 🚚
                            @elseif($venta->estado == 'Entregado') ✅
                            @elseif($venta->estado == 'Cancelado') ❌
                            @endif
                            {{ $venta->estado }}
                        </span>
                    </div>

                    {{-- Detalle de productos --}}
                    <div class="px-4 py-3" style="background: white;">
                        <table class="table table-borderless mb-0">
                            <thead>
                                <tr style="border-bottom: 1px solid #f0e8e0;">
                                    <th class="text-muted small fw-bold pb-2" style="font-family: 'Montserrat', sans-serif;">Producto</th>
                                    <th class="text-muted small fw-bold pb-2 text-center" style="font-family: 'Montserrat', sans-serif;">Cant.</th>
                                    <th class="text-muted small fw-bold pb-2 text-end" style="font-family: 'Montserrat', sans-serif;">Subtotal</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($venta->detalles as $detalle)
                                    <tr>
                                        {{-- 💡 CORREGIDO: Todo el texto del producto ahora vive correctamente adentro de su respectivo <td> --}}
                                        <td class="py-2" style="font-family: 'Montserrat', sans-serif;">
                                            🍰 {{ $detalle->producto->nombre ?? 'Producto eliminado' }}
                                            <span class="text-muted small ms-2" style="text-transform: capitalize;">
                                                ({{ $detalle->producto->categoria ?? '' }})
                                            </span>
                                        </td>
                                        <td class="py-2 text-center">
                                            <span class="badge bg-dark rounded-pill px-3">{{ $detalle->cantidad }}</span>
                                        </td>
                                        <td class="py-2 text-end fw-bold" style="color: #8c7a6b;">
                                            ${{ number_format($detalle->subtotal, 0, ',', '.') }}
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>

                    {{-- Footer de la tarjeta --}}
                    <div class="d-flex justify-content-between align-items-center px-4 py-3"
                         style="background-color: #faf7f5; border-top: 1px solid #e8ddd5;">
                        <div class="small text-muted" style="font-family: 'Montserrat', sans-serif;">
                            📍 {{ $venta->direccion ?? 'Sin dirección' }}
                        </div>
                        <div class="fw-bold fs-5" style="color: #4e2d2d; font-family: 'Cinzel', serif;">
                            Total: ${{ number_format($venta->total, 0, ',', '.') }}
                        </div>
                    </div>

                </div>
            @endforeach
        </div>

        <div class="text-center mt-5">
            <a href="/productos" class="text-decoration-none text-muted small" style="font-family: 'Montserrat', sans-serif;">
                ← Seguir comprando delicias
            </a>
        </div>
    @endif

</div>

@endsection