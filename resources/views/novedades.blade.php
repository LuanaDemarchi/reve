@extends('layouts.app')

@section('contenido')
<!-- Imagen de fondo/Banner limpia sin textos encima para que no tape el menú -->
<div class="hero-image" style="background-image: url('{{ asset('img/banner-pasteleria.jpg') }}'); background-size: cover; background-position: center; height: 350px; width: 100%; margin-top: 100px;">
</div>

<!-- Sección del Título limpia y con excelente contraste abajo del banner -->
<div class="container text-center my-5">
    <h1 style="font-family: 'Cinzel', serif; color: #4e2d2d; letter-spacing: 2px; font-size: 2.5rem; font-weight: 500;">
        Productos Destacados ✨
    </h1>
    <p class="text-muted mt-2" style="font-family: 'Montserrat', sans-serif; font-size: 1rem;">
        Los productos más nuevos y mejor catalogados de nuestra pastelería
    </p>
    <div style="width: 60px; height: 3px; background: #8c7a6b; margin: 20px auto 0 auto; border-radius: 2px;"></div>
</div>

<!-- Alertas Flotantes del Carrito -->
@if(session('success'))
    <div class="alert alert-success alert-dismissible fade show shadow-lg" role="alert" 
         style="position: fixed; top: 140px; right: 20px; z-index: 9999; border-left: 5px solid #198754; background-color: white; color: #198754; min-width: 300px;">
        <div class="d-flex align-items-center">
            <span class="fs-4 me-2">✅</span>
            <div><strong>¡Excelente!</strong><br>{{ session('success') }}</div>
        </div>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
@endif

<!-- Grilla de Productos de Novedades -->
<div class="container mb-5">
    <div class="row">
        @forelse($novedades as $producto)
            <div class="col-md-4 mb-4">
                <div class="producto-card p-3 shadow-sm rounded-4" style="background: white; border: 1px solid #f0e8e0; transition: transform 0.2s;">
                    
                    <div class="text-center overflow-hidden rounded-3 mb-3" style="height: 250px; background-color: #fcfaf8;">
                        @if($producto->url_imagen)
                            <img src="{{ asset($producto->url_imagen) }}" class="w-100 h-100" style="object-fit: cover;">
                        @else
                            <img src="{{ asset('img/roll.jpeg') }}" class="w-100 h-100" style="object-fit: cover;">
                        @endif
                    </div>

                    <div class="d-flex justify-content-between align-items-center">
                        <span class="badge text-uppercase px-2 py-1" style="background-color: #e8ddd5; color: #4e2d2d; font-size: 0.75rem; font-family: 'Montserrat', sans-serif;">
                            {{ $producto->categoria }}
                        </span>
                        <small class="text-muted" style="font-family: 'Montserrat', sans-serif;">⭐ Destacado</small>
                    </div>

                    <h3 class="mt-2" style="font-family: 'Cinzel', serif; font-size: 1.3rem; color: #4e2d2d;">
                        {{ $producto->nombre }}
                    </h3>
                    
                    <p class="text-muted small" style="font-family: 'Montserrat', sans-serif; height: 40px; overflow: hidden;">
                        {{ $producto->descripcion ?? 'Roll suave de canela.' }}
                    </p>

                    <div class="d-flex justify-content-between align-items-center mt-3">
                        <span class="fw-bold fs-5" style="color: #8c7a6b; font-family: 'Montserrat', sans-serif;">
                            ${{ number_format($producto->precio, 0, ',', '.') }}
                        </span>
                        <small class="text-muted" style="font-family: 'Montserrat', sans-serif;">Stock: {{ $producto->stock }}</small>
                    </div>

                    <form action="{{ route('carrito.agregar', $producto->id) }}" method="POST" class="mt-3">
                        @csrf
                        <button type="submit" class="btn btn-dark w-100 py-2" style="letter-spacing: 1px; font-size: 12px; background-color: #4e2d2d; border: none; font-family: 'Montserrat', sans-serif; font-weight: bold;">
                            AGREGAR AL CARRITO 🛒
                        </button>
                    </form>
                </div>
            </div>
        @empty
            <div class="col-12 text-center py-5">
                <p class="text-muted fs-5" style="font-family: 'Montserrat', sans-serif;">
                     Roll suave de canela.
                </p>
            </div>
        @endforelse
    </div>
</div>

<script>
    setTimeout(function() {
        let alert = document.querySelector('.alert');
        if(alert) {
            let bsAlert = new bootstrap.Alert(alert);
            bsAlert.close();
        }
    }, 5000);
</script>
@endsection