@extends('layouts.app')

@section('contenido')

<div class="hero-productos">
    <div class="overlay-productos"></div>

    <h1 class="titulo-hero-productos">
        Cookies
    </h1>
</div>

<div class="container mt-5 pagina-productos">

    <h2 class="categoria-titulo">Cookies</h2>

    <div class="row">

        <div class="col-md-4 mb-4">
            <div class="producto-card">
                <img src="{{ asset('img/cookies/cookies1.jpg') }}" class="img-fluid">
                <h3>Clasica</h3>
                <p>$2200</p>
            </div>
        </div>

        <div class="col-md-4 mb-4">
            <div class="producto-card">
                <img src="{{ asset('img/cookies/cookies2.jpg') }}" class="img-fluid">
                <h3>Chocolate Blanco</h3>
                <p>$2400</p>
            </div>
        </div>

        <div class="col-md-4 mb-4">
            <div class="producto-card">
                <img src="{{ asset('img/cookies/cookies3.jpg') }}" class="img-fluid">
                <h3>Cafe</h3>
                <p>$2500</p>
            </div>
        </div>

         <div class="col-md-4 mb-4">
            <div class="producto-card">
                <img src="{{ asset('img/cookies/cookies4.jpg') }}" class="img-fluid">
                <h3>Pistacho</h3>
                <p>$3000</p>
            </div>
        </div>

         <div class="col-md-4 mb-4">
            <div class="producto-card">
                <img src="{{ asset('img/cookies/cookies5.jpg') }}" class="img-fluid">
                <h3>Chocolate </h3>
                <p>$2500</p>
            </div>
        </div>

         <div class="col-md-4 mb-4">
            <div class="producto-card">
                <img src="{{ asset('img/cookies/cookies8.jpg') }}" class="img-fluid">
                <h3>Frutos Rojos</h3>
                <p>$3500</p>
            </div>
        </div>

    </div>

</div>

@endsection