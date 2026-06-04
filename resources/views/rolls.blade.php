@extends('layouts.app')

@section('contenido')

<div class="hero-productos">
    <div class="overlay-productos"></div>
    <h1 class="titulo-hero-productos">Rolls de Canela</h1>
</div>

<div class="container mt-5 pagina-productos">

    <!-- Mensajes de éxito o error por si no hay stock -->
    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif
    @if(session('error'))
        <div class="alert alert-danger">{{ session('error') }}</div>
    @endif

    <h2 class="categoria-titulo">Rolls</h2>

    <div class="row">

         <!-- 1. Clásico (ID: 1) -->
         <div class="col-md-4 mb-4">
            <div class="producto-card">
                <img src="{{ asset('img/roll.jpeg') }}" class="img-fluid">
                <h3>Clásico</h3>
                <p>$2500</p>
                <form action="{{ route('carrito.agregar', 1) }}" method="POST">
                    @csrf
                    <button type="submit" class="btn btn-primary w-100 mt-2">Agregar al carrito 🛒</button>
                </form>
            </div>
        </div>

        <!-- 2. Creamcheese (ID: 2) -->
        <div class="col-md-4 mb-4">
            <div class="producto-card">
                <img src="{{ asset('img/roll1.jpeg') }}" class="img-fluid">
                <h3>Creamchesse</h3>
                <p>$2700</p>
                <form action="{{ route('carrito.agregar', 2) }}" method="POST">
                    @csrf
                    <button type="submit" class="btn btn-primary w-100 mt-2">Agregar al carrito 🛒</button>
                </form>
            </div>
        </div>

         <!-- 3. Dulce de leche (ID: 3) -->
         <div class="col-md-4 mb-4">
            <div class="producto-card">
                <img src="{{ asset('img/roll2.jpeg') }}" class="img-fluid">
                <h3>Dulce de leche</h3>
                <p>$2700</p>
                <form action="{{ route('carrito.agregar', 3) }}" method="POST">
                    @csrf
                    <button type="submit" class="btn btn-primary w-100 mt-2">Agregar al carrito 🛒</button>
                </form>
            </div>
        </div>

        <!-- 4. Chocotorta (ID: 4) -->
        <div class="col-md-4 mb-4">
            <div class="producto-card">
                <img src="{{ asset('img/roll4.jpeg') }}" class="img-fluid">
                <h3>Chocotorta</h3>
                <p>$2700</p>
                <form action="{{ route('carrito.agregar', 4) }}" method="POST">
                    @csrf
                    <button type="submit" class="btn btn-primary w-100 mt-2">Agregar al carrito 🛒</button>
                </form>
            </div>
        </div>

        <!-- 5. Oreo (ID: 5) -->
        <div class="col-md-4 mb-4">
            <div class="producto-card">
                <img src="{{ asset('img/roll5.jpeg') }}" class="img-fluid">
                <h3>Oreo</h3>
                <p>$2700</p>
                <form action="{{ route('carrito.agregar', 5) }}" method="POST">
                    @csrf
                    <button type="submit" class="btn btn-primary w-100 mt-2">Agregar al carrito 🛒</button>
                </form>
            </div>
        </div>

        <!-- 6. Frutos Rojos (ID: 6) -->
        <div class="col-md-4 mb-4">
            <div class="producto-card">
                <img src="{{ asset('img/roll6.jpeg') }}" class="img-fluid">
                <h3>Frutos Rojos</h3>
                <p>$2700</p>
                <form action="{{ route('carrito.agregar', 6) }}" method="POST">
                    @csrf
                    <button type="submit" class="btn btn-primary w-100 mt-2">Agregar al carrito 🛒</button>
                </form>
            </div>
        </div>
    </div>

</div>

@endsection