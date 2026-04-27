@extends('layouts.app')

@section('contenido')

<div class="hero-productos">
    <div class="overlay-productos"></div>

    <h1 class="titulo-hero-productos">
        Tortas
    </h1>
</div>

<div class="container mt-5 pagina-productos">

    <h2 class="categoria-titulo">Tortas</h2>

    <div class="row">

        <div class="col-md-4 mb-4">
            <div class="producto-card">
                <img src="{{ asset('img/tortas/torta1.jpg') }}" class="img-fluid">
                <h3>Carrot Cake</h3>
                <p>$8500</p>
            </div>
        </div>

        <div class="col-md-4 mb-4">
            <div class="producto-card">
                <img src="{{ asset('img/tortas/torta2.png') }}" class="img-fluid">
                <h3>Torta Café</h3>
                <p>$9000</p>
            </div>
        </div>

        <div class="col-md-4 mb-4">
            <div class="producto-card">
                <img src="{{ asset('img/tortas/torta3.jpg') }}" class="img-fluid">
                <h3>Cheesecake</h3>
                <p>$8800</p>
            </div>
        </div>

        <div class="col-md-4 mb-4">
            <div class="producto-card">
                <img src="{{ asset('img/tortas/torta4.png') }}" class="img-fluid">
                <h3>Torta Frutilla</h3>
                <p>$8800</p>
            </div>
        </div>

        <div class="col-md-4 mb-4">
            <div class="producto-card">
                <img src="{{ asset('img/tortas/torta5.png') }}" class="img-fluid">
                <h3>Torta Chocolate</h3>
                <p>$8800</p>
            </div>
        </div>

        <div class="col-md-4 mb-4">
            <div class="producto-card">
                <img src="{{ asset('img/tortas/torta6.png') }}" class="img-fluid">
                <h3>Torta Frutos Rojos</h3>
                <p>$8800</p>
            </div>
        </div>

    </div>

</div>

@endsection