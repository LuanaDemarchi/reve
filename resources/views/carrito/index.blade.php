@extends('layouts.app')

@section('contenido')
<div class="container d-flex flex-column justify-content-center" style="min-height: 80vh; padding-top: 170px; padding-bottom: 70px;">
    
    <h2 class="mb-5 fw-bold text-center" style="font-family: 'Cinzel', serif; color: #333; letter-spacing: 1px;">
        Tu Carrito de Rolls 🛒
    </h2>

    @if(session('success'))
        <div class="alert alert-success alert-dismissible fade show mb-4" role="alert">
            {{ session('success') }}
        </div>
    @endif
    
    @if(session('error'))
        <div class="alert alert-danger alert-dismissible fade show mb-4" role="alert">
            {{ session('error') }}
        </div>
    @endif

    @if(empty($carrito))
        <div class="text-center py-5">
            <p class="fs-4 text-muted">Tu carrito está vacío por ahora.</p>
            <a href="/productos" class="btn btn-dark mt-3 px-4 py-2">Ver Productos</a>
        </div>
    @endif

    @if(!empty($carrito))
        <div class="row g-4 align-items-center">
            <div class="col-lg-8">
                <div class="card shadow-sm p-4 bg-white rounded border-0">
                    <table class="table align-middle m-0">
                        <thead class="table-light">
                            <tr>
                                <th class="py-3">Producto</th>
                                <th class="py-3">Precio</th>
                                <th class="py-3 text-center">Cantidad</th>
                                <th class="py-3">Subtotal</th>
                                <th class="py-3"></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($carrito as $id => $item)
                                <tr>
                                    <td class="py-3">
                                        <div class="d-flex align-items-center">
                                            @if($item['imagen'])
                                                <img src="{{ asset($item['imagen']) }}" style="width: 55px; height: 55px; object-fit: cover; border-radius: 6px;" class="me-3">
                                            @endif
                                            <span class="fw-bold text-secondary">{{ $item['nombre'] }}</span>
                                        </div>
                                    </td>
                                    <td class="py-3">${{ number_format($item['precio'], 0, ',', '.') }}</td>
                                    <td class="py-3 text-center">
                                        <span class="badge bg-dark p-2 px-3 fs-6 rounded-pill">{{ $item['cantidad'] }}</span>
                                    </td>
                                    <td class="py-3 fw-bold">${{ number_format($item['precio'] * $item['cantidad'], 0, ',', '.') }}</td>
                                    <td class="py-3 text-end">
                                        <form action="{{ route('carrito.quitar', $id) }}" method="POST" class="d-inline">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-sm btn-outline-danger border-0 fs-5">
                                                ✕
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>

            <div class="col-lg-4">
                <div class="card shadow-sm p-4 bg-white rounded border-0">
                    <h4 class="fw-bold mb-3" style="color: #8c7a6b; font-family: 'Montserrat', sans-serif;">Resumen</h4>
                    <hr class="text-muted">
                    
                    <div class="d-flex justify-content-between fs-5 mb-4 py-2">
                        <span class="text-muted">Total:</span>
                        <span class="fw-bold text-success fs-4">${{ number_format($total, 0, ',', '.') }}</span>
                    </div>

                    {{-- SI ESTÁ LOGUEADO: Puede comprar directamente --}}
                    @auth
                        <form action="{{ route('carrito.confirmar') }}" method="POST">
                            @csrf
                            <button type="submit" class="btn btn-dark w-100 py-3 fw-bold text-uppercase" style="letter-spacing: 1px; font-size: 0.9rem;">
                                CONFIRMAR COMPRA 💳
                            </button>
                        </form>
                    @endauth

                    {{-- SI ES VISITANTE: Mensaje de advertencia + Botón de Login --}}
                    @guest
                        <div class="p-3 mb-3 text-center rounded animate__animated animate__fadeIn" style="background-color: #fcf8e3; border: 1px solid #fbeed5; color: #c09853;">
                            <p class="small m-0 fw-bold">⚠️ ¡Ya casi lo tenés!</p>
                            <p class="small m-0 mt-1" style="font-size: 0.85rem; line-height: 1.3;">
                                Para poder finalizar tu compra y procesar el pedido, necesitás iniciar sesión.
                            </p>
                        </div>
                        
                        <a href="{{ route('login') }}" class="btn btn-dark w-100 py-3 fw-bold text-uppercase" style="letter-spacing: 1px; font-size: 0.9rem;">
                            INICIAR SESIÓN 🔑
                        </a>

                        <div class="text-center mt-3">
                            <span class="small text-muted">¿No tenés cuenta todavía?</span> <br>
                            <a href="{{ route('registro') }}" class="small fw-bold text-dark text-decoration-none">
                                Registrate haciendo click acá
                            </a>
                        </div>
                    @endguest
                    
                    <div class="text-center mt-4">
                        <a href="/productos" class="text-decoration-none text-muted small">
                            ← Seguir viendo delicias
                        </a>
                    </div>
                </div>
            </div>
        </div>
    @endif
</div>
@endsection