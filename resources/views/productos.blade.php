
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

</div>
@endsection

