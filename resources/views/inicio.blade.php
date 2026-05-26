@extends('layouts.app')

@section('contenido')
<div class="hero" id="hero">
    <video autoplay muted loop playsinline style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; object-fit: cover; z-index: 0;">
        <source src="{{ asset('video/pag1.mp4') }}" type="video/mp4">
        Tu navegador no soporta videos.
    </video>

    <div class="overlay" style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; z-index: 1;"></div>

    <div class="contenido" style="position: relative; z-index: 2;">
        <h1>ReVe</h1>
        <div style="display: flex; justify-content: center; gap: 15px; flex-wrap: wrap; margin-top: 20px;">
            <a href="#" class="btn-pedido">Pedido</a>
            @guest
                <a href="{{ route('registro') }}" class="btn-pedido" style="background-color: #d4a373; border-color: #d4a373;">Registrarse</a>
                <a href="{{ route('login') }}" class="btn-pedido" style="background-color: transparent; border: 2px solid #ffffff;">Iniciar Sesión</a>
            @endguest
        </div>
    </div>
</div>

<section class="productos-home">

<div class="productos-header">
<span class="subtitulo-home">Pâtisserie artisanale</span>
<h2>Nuestros Productos</h2>
</div>

<div id="carouselProductos" class="carousel slide" data-bs-ride="carousel">

<div class="carousel-inner">

<!-- Slide 1 -->
<div class="carousel-item active">
<div class="productos-slide-grid">

<div class="producto-slide">
<img src="{{ asset('img/roll.jpeg') }}">
<h3>Roll Clásico</h3>
</div>

<div class="producto-slide">
<img src="{{ asset('img/roll1.jpeg') }}">
<h3>Cream Cheese</h3>
</div>

<div class="producto-slide">
<img src="{{ asset('img/roll5.jpeg') }}">
<h3>Oreo</h3>
</div>

</div>
</div>

<!-- Slide 2 -->
<div class="carousel-item">
<div class="productos-slide-grid">

<div class="producto-slide">
<img src="{{ asset('img/roll2.jpeg') }}">
<h3>Dulce de Leche</h3>
</div>

<div class="producto-slide">
<img src="{{ asset('img/roll4.jpeg') }}">
<h3>Chocotorta</h3>
</div>

<div class="producto-slide">
<img src="{{ asset('img/roll6.jpeg') }}">
<h3>Frutos Rojos</h3>
</div>

</div>
</div>

</div>

<button class="carousel-control-prev" type="button" data-bs-target="#carouselProductos" data-bs-slide="prev">
<span class="carousel-control-prev-icon"></span>
</button>

<button class="carousel-control-next" type="button" data-bs-target="#carouselProductos" data-bs-slide="next">
<span class="carousel-control-next-icon"></span>
</button>

</div>

</section>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

<section class="conocenos-home">
    <div class="conocenos-contenido">
        <span class="subtitulo-home">Notre Maison</span>
        <h2>Conocenos</h2>
        <a href="/quienes_somos" class="btn-conocenos">
            Quienes Somos
        </a>
    </div>  
</section>


<script src="{{ asset('js/slider.js') }}"></script>

@endsection