
@extends('layouts.app')
@section('contenido')
<div class="hero-productos">
     <div class="overlay-productos"></div>

    <h1 class="titulo-hero-productos">
        Productos
    </h1>

</div>
<div class="container mt-5">
    
<div class="container pagina-productos">
    
    <h2 class="categoria-titulo">Rolls de Canela</h2>

    <div class="row">

        <div class="col-md-4 mb-4">
            <div class="producto-card">
                <img src="{{ asset('img/roll.jpeg') }}" class="img-fluid">
                <h3>Clasico</h3>
                <p>$2500</p>
            </div>
        </div>

        <div class="col-md-4 mb-4">
            <div class="producto-card">
                <img src="{{ asset('img/roll1.jpeg') }}" class="img-fluid">
                <h3>Creamchesse</h3>
                <p>$2700</p>
            </div>
        </div>

         <div class="col-md-4 mb-4">
            <div class="producto-card">
                <img src="{{ asset('img/roll2.jpeg') }}" class="img-fluid">
                <h3>Dulce de leche</h3>
                <p>$2700</p>
            </div>
        </div>

        <div class="col-md-4 mb-4">
            <div class="producto-card">
                <img src="{{ asset('img/roll4.jpeg') }}" class="img-fluid">
                <h3>Chocotorta</h3>
                <p>$2700</p>
            </div>
        </div>

        <div class="col-md-4 mb-4">
            <div class="producto-card">
                <img src="{{ asset('img/roll5.jpeg') }}" class="img-fluid">
                <h3>Oreo</h3>
                <p>$2700</p>
            </div>
        </div>

        <div class="col-md-4 mb-4">
            <div class="producto-card">
                <img src="{{ asset('img/roll6.jpeg') }}" class="img-fluid">
                <h3>Frutos Rojos</h3>
                <p>$2700</p>
            </div>
        </div>

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
                <h3>Torta Cafe</h3>
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

</div>
</div>
@endsection

