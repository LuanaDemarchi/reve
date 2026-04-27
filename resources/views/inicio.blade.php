@extends('layouts.app')

@section('contenido')
<div class="hero" id="hero">
    <video autoplay muted loop class="video-bg">
        <source src="{{ asset('video/pag1.mp4') }}" type="video/mp4">
    </video>
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


<div class="carousel-item active">
<div class="productos-slide-grid">

<div class="producto-slide">
<img src="{{ asset('img/roll.jpeg') }}">
</div>

<div class="producto-slide">
<img src="{{ asset('img/roll1.jpeg') }}">
</div>

<div class="producto-slide">
<img src="{{ asset('img/roll5.jpeg') }}">
</div>


</div>
</div>

<div class="carousel-item">
<div class="productos-slide-grid">

<div class="producto-slide">
<img src="{{ asset('img/cookies/cookies4.jpg') }}">
</div>

<div class="producto-slide">
<img src="{{ asset('img/cookies/cookies5.jpg') }}">
</div>

<div class="producto-slide">
<img src="{{ asset('img/cookies/cookies1.jpg') }}">
</div>

<div class="producto-slide">
<img src="{{ asset('img/cookies/cookies2.jpg') }}">
</div>

</div>
</div>

<div class="carousel-item">
<div class="productos-slide-grid">

<div class="producto-slide">
<img src="{{ asset('img/tortas/torta4.png') }}">
</div>

<div class="producto-slide">
<img src="{{ asset('img/tortas/torta5.png') }}">
</div>

<div class="producto-slide">
<img src="{{ asset('img/tortas/torta1.jpg') }}">
</div>

<div class="producto-slide">
<img src="{{ asset('img/tortas/torta2.png') }}">
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

<div class="separador">
    <span>✫</span>
</div>

<!-- ========================================= -->
<!-- SECCIÓN CATEGORÍAS -->
<!-- ========================================= -->

<section class="categorias-home">

    <div class="productos-header">
        <span class="subtitulo-home">Notre sélection</span>
        <h2>Categorías</h2>
    </div>

    <div class="categorias-grid">

        <!-- ROLLS -->
        <a href="/rolls" class="categoria-item">
            <img src="{{ asset('img/FondoCategoria/fondoRoll.jpg') }}">
            <div class="categoria-overlay">
                <h3>Rolls</h3>
            </div>
        </a>

        <!-- COOKIES -->
        <a href="/cookies" class="categoria-item">
            <img src="{{ asset('img/FondoCategoria/fondoCookie.jpg') }}">
            <div class="categoria-overlay">
                <h3>Cookies</h3>
            </div>
        </a>

        <!-- TORTAS -->
        <a href="/tortas" class="categoria-item">
            <img src="{{ asset('img/FondoCategoria/fondotorta.jpg') }}">
            <div class="categoria-overlay">
                <h3>Tortas</h3>
            </div>
        </a>

    </div>

</section>

<section class="conocenos-home">
    <div class="conocenos-contenido">
        <h2>Conocenos</h2>
        <a href="/quienes_somos" class="btn-conocenos">
            Quienes Somos
        </a>
    </div>  
</section>

<section class="novedades-home">

    <div class="novedades-header">
        <span class="subtitulo-home">Nouveautés</span>
        <h2>Novedades</h2>
    </div>

    <div id="carouselNovedades" class="carousel slide" data-bs-ride="carousel">

        <div class="carousel-inner">

          
            <div class="carousel-item active">
                <div class="novedades-slide">
                    <img src="{{ asset('img/novedades/nove3.png') }}" class="img-fluid">
                </div>
            </div>

           
            <div class="carousel-item">
                <div class="novedades-slide">
                    <img src="{{ asset('img/novedades/nove2.png') }}" class="img-fluid">
                </div>
            </div>

         
            <div class="carousel-item">
                <div class="novedades-slide">
                    <img src="{{ asset('img/novedades/nove1.png') }}" class="img-fluid">
                </div>
            </div>

        </div>

        <button class="carousel-control-prev" type="button" data-bs-target="#carouselNovedades" data-bs-slide="prev">
            <span class="carousel-control-prev-icon"></span>
        </button>

        <button class="carousel-control-next" type="button" data-bs-target="#carouselNovedades" data-bs-slide="next">
            <span class="carousel-control-next-icon"></span>
        </button>

    </div>

</section>


<script src="{{ asset('js/slider.js') }}"></script>

@endsection