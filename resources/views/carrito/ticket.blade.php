@extends('layouts.app')

@section('contenido')
<div class="container d-flex flex-column justify-content-center align-items-center" style="min-height: 90vh; padding-top: 300px; padding-bottom: 70px;">    
    <div class="text-center mb-4">
        <span class="fs-1">🎉</span>
        <h2 class="fw-bold mt-2" style="font-family: 'Cinzel', serif; color: #2b2b2b;">¡Gracias por tu compra!</h2>
        <p class="text-muted">Tu pedido está siendo procesado por nuestros pasteleros.</p>
    </div>

    <!-- El Ticket Físico Simulado -->
    <div class="card shadow-lg p-4 bg-white rounded border-0" style="max-width: 500px; width: 100%; font-family: 'Courier New', Courier, monospace; border-top: 6px dashed #8c7a6b !important;">
        
        <div class="text-center mb-3">
            <h4 class="fw-bold m-0" style="font-family: 'Cinzel', serif;">REVE PATISSERIE</h4>
            <small class="text-muted">Corrientes, Argentina</small>
            <hr style="border-top: 2px dashed #bbb;">
            <h5 class="fw-bold">{{ $ticket['nro_pedido'] }}</h5>
            <small class="text-muted">Fecha: {{ $ticket['fecha'] }}</small>
        </div>

        <div class="mb-3 small">
            <strong>Cliente:</strong> {{ $ticket['cliente'] }} <br>
            <strong>Teléfono:</strong> {{ $ticket['telefono'] }} <br>
            <strong>Entrega en:</strong> {{ $ticket['direccion'] }} <br>
            <strong>Pago:</strong> {{ $ticket['metodo_pago'] }}
        </div>

        <hr style="border-top: 1px dashed #bbb;">

        <!-- Detalle de productos -->
        <div class="mb-3">
            @foreach($ticket['productos'] as $item)
                <div class="d-flex justify-content-between my-1 small">
                    <span>{{ $item['cantidad'] }}x {{ $item['nombre'] }}</span>
                    <span>${{ number_format($item['precio'] * $item['cantidad'], 0, ',', '.') }}</span>
                </div>
            @endforeach
        </div>

        <hr style="border-top: 2px dashed #bbb;">

        <div class="d-flex justify-content-between fw-bold fs-5 mb-3">
            <span>TOTAL:</span>
            <span class="text-success">${{ number_format($ticket['total'], 0, ',', '.') }}</span>
        </div>

        @if($ticket['metodo_pago'] == 'Transferencia')
            <div class="p-2 mb-3 bg-light text-center rounded" style="font-size: 0.8rem; font-family: sans-serif;">
                <p class="m-0 fw-bold text-secondary">Alias de pago: <strong>reve.patisserie.mp</strong></p>
                <p class="m-0 text-muted" style="font-size: 11px;">Por favor, enviá el comprobante por WhatsApp.</p>
            </div>
        @endif

        <div class="text-center mt-2">
            <small class="text-muted">¡Que disfrutes"! ☕</small>
        </div>
    </div>

    <div class="mt-4">
        <a href="/productos" class="btn btn-dark px-4 py-2 text-uppercase fw-bold" style="font-size: 13px; letter-spacing: 1px;">
            Volver a la Tienda
        </a>
    </div>

</div>
@endsection