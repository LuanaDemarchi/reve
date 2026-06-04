
@extends('layouts.app')
@section('contenido')
<div class="hero-productos">
     <div class="overlay-productos"></div>
    <h1 class="titulo-hero-productos">
        Productos
    </h1>
</div>

<!-- 🔔 NOTIFICACIONES FLOTANTES -->
@if(session('success'))
    <div class="alert alert-success alert-dismissible fade show shadow-lg" role="alert" 
         style="position: fixed; top: 120px; right: 20px; z-index: 9999; border-left: 5px solid #198754; background-color: white; color: #198754; min-width: 300px;">
        <div class="d-flex align-items-center">
            <span class="fs-4 me-2">✅</span>
            <div><strong>¡Excelente!</strong><br>{{ session('success') }}</div>
        </div>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
@endif

@if(session('error'))
    <div class="alert alert-danger alert-dismissible fade show shadow-lg" role="alert" 
         style="position: fixed; top: 120px; right: 20px; z-index: 9999; border-left: 5px solid #dc3545; background-color: white; color: #dc3545; min-width: 300px;">
        <div class="d-flex align-items-center">
            <span class="fs-4 me-2">⚠️</span>
            <div><strong>Hubo un problema</strong><br>{{ session('error') }}</div>
        </div>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
@endif

<div class="container mt-5">
<div class="container pagina-productos">

    {{-- ROLLS --}}
    <h2 class="categoria-titulo">Rolls de Canela</h2>
    <div class="row">

        <div class="col-md-4 mb-4">
            <div class="producto-card">
                <img src="{{ asset('img/roll.jpeg') }}" class="img-fluid">
                <h3>Clasico</h3>
                <p>$2500</p>
                <form action="{{ route('carrito.agregar', 1) }}" method="POST">
                    @csrf
                    <button type="submit" class="btn btn-dark w-100 mt-2" style="letter-spacing: 1px; font-size: 14px;">AGREGAR AL CARRITO 🛒</button>
                </form>
            </div>
        </div>

        <div class="col-md-4 mb-4">
            <div class="producto-card">
                <img src="{{ asset('img/roll1.jpeg') }}" class="img-fluid">
                <h3>Creamchesse</h3>
                <p>$2700</p>
                <form action="{{ route('carrito.agregar', 2) }}" method="POST">
                    @csrf
                    <button type="submit" class="btn btn-dark w-100 mt-2" style="letter-spacing: 1px; font-size: 14px;">AGREGAR AL CARRITO 🛒</button>
                </form>
            </div>
        </div>

        <div class="col-md-4 mb-4">
            <div class="producto-card">
                <img src="{{ asset('img/roll2.jpeg') }}" class="img-fluid">
                <h3>Dulce de leche</h3>
                <p>$2700</p>
                <form action="{{ route('carrito.agregar', 3) }}" method="POST">
                    @csrf
                    <button type="submit" class="btn btn-dark w-100 mt-2" style="letter-spacing: 1px; font-size: 14px;">AGREGAR AL CARRITO 🛒</button>
                </form>
            </div>
        </div>

        <div class="col-md-4 mb-4">
            <div class="producto-card">
                <img src="{{ asset('img/roll4.jpeg') }}" class="img-fluid">
                <h3>Chocotorta</h3>
                <p>$2700</p>
                <form action="{{ route('carrito.agregar', 4) }}" method="POST">
                    @csrf
                    <button type="submit" class="btn btn-dark w-100 mt-2" style="letter-spacing: 1px; font-size: 14px;">AGREGAR AL CARRITO 🛒</button>
                </form>
            </div>
        </div>

        <div class="col-md-4 mb-4">
            <div class="producto-card">
                <img src="{{ asset('img/roll5.jpeg') }}" class="img-fluid">
                <h3>Oreo</h3>
                <p>$2700</p>
                <form action="{{ route('carrito.agregar', 5) }}" method="POST">
                    @csrf
                    <button type="submit" class="btn btn-dark w-100 mt-2" style="letter-spacing: 1px; font-size: 14px;">AGREGAR AL CARRITO 🛒</button>
                </form>
            </div>
        </div>

        <div class="col-md-4 mb-4">
            <div class="producto-card">
                <img src="{{ asset('img/roll6.jpeg') }}" class="img-fluid">
                <h3>Frutos Rojos</h3>
                <p>$2700</p>
                <form action="{{ route('carrito.agregar', 6) }}" method="POST">
                    @csrf
                    <button type="submit" class="btn btn-dark w-100 mt-2" style="letter-spacing: 1px; font-size: 14px;">AGREGAR AL CARRITO 🛒</button>
                </form>
            </div>
        </div>

    </div>

    {{-- COOKIES --}}
    <div class="container mt-5 pagina-productos">
    <h2 class="categoria-titulo">Cookies</h2>
    <div class="row">

        <div class="col-md-4 mb-4">
            <div class="producto-card">
                <img src="{{ asset('img/cookies/cookies1.jpg') }}" class="img-fluid">
                <h3>Clasica</h3>
                <p>$2200</p>
                <form action="{{ route('carrito.agregar', 7) }}" method="POST">
                    @csrf
                    <button type="submit" class="btn btn-dark w-100 mt-2" style="letter-spacing: 1px; font-size: 14px;">AGREGAR AL CARRITO 🛒</button>
                </form>
            </div>
        </div>

        <div class="col-md-4 mb-4">
            <div class="producto-card">
                <img src="{{ asset('img/cookies/cookies2.jpg') }}" class="img-fluid">
                <h3>Chocolate Blanco</h3>
                <p>$2400</p>
                <form action="{{ route('carrito.agregar', 8) }}" method="POST">
                    @csrf
                    <button type="submit" class="btn btn-dark w-100 mt-2" style="letter-spacing: 1px; font-size: 14px;">AGREGAR AL CARRITO 🛒</button>
                </form>
            </div>
        </div>

        <div class="col-md-4 mb-4">
            <div class="producto-card">
                <img src="{{ asset('img/cookies/cookies3.jpg') }}" class="img-fluid">
                <h3>Cafe</h3>
                <p>$2500</p>
                <form action="{{ route('carrito.agregar', 9) }}" method="POST">
                    @csrf
                    <button type="submit" class="btn btn-dark w-100 mt-2" style="letter-spacing: 1px; font-size: 14px;">AGREGAR AL CARRITO 🛒</button>
                </form>
            </div>
        </div>

        <div class="col-md-4 mb-4">
            <div class="producto-card">
                <img src="{{ asset('img/cookies/cookies4.jpg') }}" class="img-fluid">
                <h3>Pistacho</h3>
                <p>$3000</p>
                <form action="{{ route('carrito.agregar', 10) }}" method="POST">
                    @csrf
                    <button type="submit" class="btn btn-dark w-100 mt-2" style="letter-spacing: 1px; font-size: 14px;">AGREGAR AL CARRITO 🛒</button>
                </form>
            </div>
        </div>

        <div class="col-md-4 mb-4">
            <div class="producto-card">
                <img src="{{ asset('img/cookies/cookies5.jpg') }}" class="img-fluid">
                <h3>Chocolate</h3>
                <p>$2500</p>
                <form action="{{ route('carrito.agregar', 11) }}" method="POST">
                    @csrf
                    <button type="submit" class="btn btn-dark w-100 mt-2" style="letter-spacing: 1px; font-size: 14px;">AGREGAR AL CARRITO 🛒</button>
                </form>
            </div>
        </div>

        <div class="col-md-4 mb-4">
            <div class="producto-card">
                <img src="{{ asset('img/cookies/cookies8.jpg') }}" class="img-fluid">
                <h3>Frutos Rojos</h3>
                <p>$3500</p>
                <form action="{{ route('carrito.agregar', 12) }}" method="POST">
                    @csrf
                    <button type="submit" class="btn btn-dark w-100 mt-2" style="letter-spacing: 1px; font-size: 14px;">AGREGAR AL CARRITO 🛒</button>
                </form>
            </div>
        </div>

    </div>
    </div>

    {{-- TORTAS --}}
    <div class="container mt-5 pagina-productos">
    <h2 class="categoria-titulo">Tortas</h2>
    <div class="row">

        <div class="col-md-4 mb-4">
            <div class="producto-card">
                <img src="{{ asset('img/tortas/torta1.jpg') }}" class="img-fluid">
                <h3>Carrot Cake</h3>
                <p>$8500</p>
                <form action="{{ route('carrito.agregar', 13) }}" method="POST">
                    @csrf
                    <button type="submit" class="btn btn-dark w-100 mt-2" style="letter-spacing: 1px; font-size: 14px;">AGREGAR AL CARRITO 🛒</button>
                </form>
            </div>
        </div>

        <div class="col-md-4 mb-4">
            <div class="producto-card">
                <img src="{{ asset('img/tortas/torta2.png') }}" class="img-fluid">
                <h3>Torta Cafe</h3>
                <p>$9000</p>
                <form action="{{ route('carrito.agregar', 14) }}" method="POST">
                    @csrf
                    <button type="submit" class="btn btn-dark w-100 mt-2" style="letter-spacing: 1px; font-size: 14px;">AGREGAR AL CARRITO 🛒</button>
                </form>
            </div>
        </div>

        <div class="col-md-4 mb-4">
            <div class="producto-card">
                <img src="{{ asset('img/tortas/torta3.jpg') }}" class="img-fluid">
                <h3>Cheesecake</h3>
                <p>$8800</p>
                <form action="{{ route('carrito.agregar', 15) }}" method="POST">
                    @csrf
                    <button type="submit" class="btn btn-dark w-100 mt-2" style="letter-spacing: 1px; font-size: 14px;">AGREGAR AL CARRITO 🛒</button>
                </form>
            </div>
        </div>

        <div class="col-md-4 mb-4">
            <div class="producto-card">
                <img src="{{ asset('img/tortas/torta4.png') }}" class="img-fluid">
                <h3>Torta Frutilla</h3>
                <p>$8800</p>
                <form action="{{ route('carrito.agregar', 16) }}" method="POST">
                    @csrf
                    <button type="submit" class="btn btn-dark w-100 mt-2" style="letter-spacing: 1px; font-size: 14px;">AGREGAR AL CARRITO 🛒</button>
                </form>
            </div>
        </div>

        <div class="col-md-4 mb-4">
            <div class="producto-card">
                <img src="{{ asset('img/tortas/torta5.png') }}" class="img-fluid">
                <h3>Torta Chocolate</h3>
                <p>$8800</p>
                <form action="{{ route('carrito.agregar', 17) }}" method="POST">
                    @csrf
                    <button type="submit" class="btn btn-dark w-100 mt-2" style="letter-spacing: 1px; font-size: 14px;">AGREGAR AL CARRITO 🛒</button>
                </form>
            </div>
        </div>

        <div class="col-md-4 mb-4">
            <div class="producto-card">
                <img src="{{ asset('img/tortas/torta6.png') }}" class="img-fluid">
                <h3>Torta Frutos Rojos</h3>
                <p>$8800</p>
                <form action="{{ route('carrito.agregar', 18) }}" method="POST">
                    @csrf
                    <button type="submit" class="btn btn-dark w-100 mt-2" style="letter-spacing: 1px; font-size: 14px;">AGREGAR AL CARRITO 🛒</button>
                </form>
            </div>
        </div>

    </div>
    </div>

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