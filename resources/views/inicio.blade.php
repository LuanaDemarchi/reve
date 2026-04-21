@extends('layouts.app')

@section('contenido')
<div class="hero" id="hero">
    <div class="overlay"></div>

    <div class="contenido">
        <h1>ReVe</h1>
        <a href="#" class="btn-pedido">Pedido</a>
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