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
                    
                    {{-- Información Personal --}}
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

                    {{-- Tipo de entrega --}}
                    <h5 class="fw-bold mb-3 text-secondary" style="font-family: 'Montserrat', sans-serif;">¿Cómo querés recibir tu pedido?</h5>

                    @if($calificaEnvio)
                        <div class="row g-3 mb-3">
                            <div class="col-md-6">
                                <div class="form-check border rounded p-3 h-100" style="cursor:pointer;">
                                    <input class="form-check-input" type="radio" name="tipo_entrega" id="envio" value="envio" checked onchange="toggleEntrega()">
                                    <label class="form-check-label fw-bold" for="envio">
                                        🚚 Envío a domicilio
                                    </label>
                                    <p class="small text-muted mt-1 mb-0">Te lo llevamos a tu casa.</p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-check border rounded p-3 h-100" style="cursor:pointer;">
                                    <input class="form-check-input" type="radio" name="tipo_entrega" id="retiro" value="retiro" onchange="toggleEntrega()">
                                    <label class="form-check-label fw-bold" for="retiro">
                                        🏪 Retiro en local
                                    </label>
                                    <p class="small text-muted mt-1 mb-0">Av. 3 de Abril 546, Corrientes</p>
                                </div>
                            </div>
                        </div>
                    @else
                        <div class="alert alert-warning mb-3">
                            ⚠️ Para acceder al <strong>envío a domicilio</strong> necesitás pedir al menos <strong>6 rolls o cookies</strong> (media docena), o incluir una <strong>torta</strong> en tu pedido.
                        </div>
                        <input type="hidden" name="tipo_entrega" value="retiro">
                    @endif

                    {{-- Horario estimado --}}
                    <div class="alert alert-info mb-4" style="background-color: #f0f7ff; border-color: #c8e0f7; color: #2c5f8a;">
                        🕐 <strong>Horario de atención:</strong> Martes a Domingo de 09:00 a 20:00 hs.<br>
                        <span class="small">Tu pedido estará listo aproximadamente <strong>2 horas</strong> después de confirmado.</span>
                    </div>

                    {{-- Dirección de envío (solo si califica) --}}
                    @if($calificaEnvio)
                        <div id="seccion-envio" class="mb-4">
                            <h5 class="fw-bold mb-3 text-secondary" style="font-family: 'Montserrat', sans-serif;">Dirección de Entrega</h5>
                            <div class="row g-3">
                                <div class="col-md-8">
                                    <label class="form-label small text-muted fw-bold">Calle y Número</label>
                                    <input type="text" name="direccion" id="input-direccion" class="form-control py-2" placeholder="Av. Centenario 1234">
                                </div>
                                <div class="col-md-4">
                                    <label class="form-label small text-muted fw-bold">Dpto / Piso (Opcional)</label>
                                    <input type="text" name="dpto" class="form-control py-2" placeholder="Piso 2 Dpto B">
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label small text-muted fw-bold">Ciudad</label>
                                    <input type="text" name="ciudad" class="form-control py-2" value="Corrientes">
                                </div>
                            </div>
                        </div>

                        <div id="seccion-retiro" class="mb-4" style="display:none;">
                            <div class="p-3 rounded" style="background-color: #f8f5f2; border: 1px solid #e0d5cc;">
                                <p class="mb-1 fw-bold">📍 Dirección de retiro:</p>
                                <p class="mb-0 text-muted">Av. 3 de Abril 546, Corrientes</p>
                                <p class="mb-0 small text-muted">Martes a Domingo · 09:00 a 20:00 hs</p>
                            </div>
                            <input type="hidden" name="direccion" value="Retiro en local - Av. 3 de Abril 546">
                        </div>
                    @else
                        <div class="p-3 rounded mb-4" style="background-color: #f8f5f2; border: 1px solid #e0d5cc;">
                            <p class="mb-1 fw-bold">📍 Dirección de retiro:</p>
                            <p class="mb-0 text-muted">Av. 3 de Abril 546, Corrientes</p>
                            <p class="mb-0 small text-muted">Martes a Domingo · 09:00 a 20:00 hs</p>
                        </div>
                        <input type="hidden" name="direccion" value="Retiro en local - Av. 3 de Abril 546">
                    @endif

                    {{-- Método de pago --}}
                    <div class="row g-3 mb-4">
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

        {{-- Mini Resumen --}}
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

<script>
function toggleEntrega() {
    const envio = document.getElementById('envio');
    const seccionEnvio = document.getElementById('seccion-envio');
    const seccionRetiro = document.getElementById('seccion-retiro');
    const inputDireccion = document.getElementById('input-direccion');

    if (envio && envio.checked) {
        seccionEnvio.style.display = 'block';
        seccionRetiro.style.display = 'none';
        inputDireccion.setAttribute('required', 'required');
    } else {
        seccionEnvio.style.display = 'none';
        seccionRetiro.style.display = 'block';
        inputDireccion.removeAttribute('required');
    }
}
</script>

@endsection