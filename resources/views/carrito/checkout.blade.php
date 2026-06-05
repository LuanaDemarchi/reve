@extends('layouts.app')

@section('contenido')
<div class="container d-flex flex-column justify-content-center" style="min-height: 85vh; padding-top: 200px; padding-bottom: 70px;">
    
    <h2 class="mb-4 fw-bold text-center" style="font-family: 'Cinzel', serif; color: #333; letter-spacing: 1px;">
        Datos de Envío y Pago 📦
    </h2>

    <div class="row g-4 justify-content-center">
        <div class="col-lg-7">
            <div class="card shadow-sm p-4 bg-white rounded border-0">
                <form action="{{ route('carrito.procesar') }}" method="POST">
                    @csrf
                    
                    <h5 class="fw-bold mb-3 text-secondary" style="font-family: 'Montserrat', sans-serif;">Información Personal</h5>
                    <div class="row g-3 mb-4">
                        <div class="col-md-6">
                            <label class="form-label small text-muted fw-bold">Nombre Completo</label>
                            <input type="text" name="nombre" class="form-control py-2" value="{{ auth()->user()->name }}" required>
                        </div>
                        <div class="col-md-6">
                            <label class="form-label small text-muted fw-bold">Teléfono de Contacto</label>
                            <input type="tel" name="telefono" class="form-control py-2" placeholder="Ej: 3794123456" required>
                        </div>
                    </div>

                    <h5 class="fw-bold mb-3 text-secondary" style="font-family: 'Montserrat', sans-serif;">Dirección de Entrega</h5>
                    <div class="row g-3 mb-4">
                        <div class="col-md-8">
                            <label class="form-label small text-muted fw-bold">Calle y Número</label>
                            <input type="text" name="direccion" class="form-control py-2" placeholder="Av. Centenario 1234" required>
                        </div>
                        <div class="col-md-4">
                            <label class="form-label small text-muted fw-bold">Dpto / Piso (Opcional)</label>
                            <input type="text" name="dpto" class="form-control py-2" placeholder="Piso 2 Dpto B">
                        </div>
                        <div class="col-md-6">
                            <label class="form-label small text-muted fw-bold">Ciudad</label>
                            <input type="text" name="ciudad" class="form-control py-2" value="Corrientes" required>
                        </div>
                        <div class="col-md-6">
                            <label class="form-label small text-muted fw-bold">Método de Pago</label>
                            <select name="metodo_pago" class="form-select py-2" required>
                                <option value="Transferencia">Transferencia Bancaria / Mercado Pago</option>
                                <option value="Efectivo">Efectivo al recibir</option>
                            </select>
                        </div>
                    </div>

                    <button type="submit" class="btn btn-dark w-100 py-3 fw-bold text-uppercase" style="letter-spacing: 1px;">
                        FINALIZAR COMPRA Y GENERAR TICKET 💳
                    </button>
                </form>
            </div>
        </div>

        <!-- Mini Resumen -->
        <div class="col-lg-4">
            <div class="card shadow-sm p-4 bg-white rounded border-0" style="border-top: 4px solid #8c7a6b !important;">
                <h5 class="fw-bold mb-3" style="color: #8c7a6b; font-family: 'Montserrat', sans-serif;">Tu Pedido</h5>
                <hr class="text-muted">
                
                <div style="max-height: 200px; overflow-y: auto;" class="mb-3">
                    @foreach($carrito as $item)
                        <div class="d-flex justify-content-between align-items-center mb-2">
                            <span class="small text-muted">{{ $item['cantidad'] }}x {{ $item['nombre'] }}</span>
                            <span class="small fw-bold text-secondary">${{ number_format($item['precio'] * $item['cantidad'], 0, ',', '.') }}</span>
                        </div>
                    @endforeach
                </div>
                
                <hr class="text-muted">
                <div class="d-flex justify-content-between fs-5">
                    <span class="text-muted">Total a pagar:</span>
                    <span class="fw-bold text-success fs-4">${{ number_format($total, 0, ',', '.') }}</span>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection