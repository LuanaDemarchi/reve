

@extends('layouts.app')
@section('contenido')

<div class="hero-informacion">
     <div class="overlay-informacion"></div>

    <h1 class="titulo-hero-informacion">
        Informacion
    </h1>

    </div>

<section class="informacion-reve">

<div class="informacion-texto">

<span>Servicios</span>

<h2>Entrega a domicilio</h2>

<p>
Coordinamos entregas, medios de pago
y pedidos personalizados.
</p>

<ul>
<li>Delivery propio</li>
<li>Efectivo</li>
<li>Mercado Pago</li>
<li>Transferencia</li>
</ul>

</div>

<div class="informacion-imagen">
<img src="{{ asset('img/entrega.jpg') }}">
</div>

</section>
<section class="mapa-editorial">

<div class="overlay-mapa"></div>

<div class="mapa-contenido">
    <h2>Visitanos</h2>

    <a href="#" class="btn-mapa">
       Ver ubicación
    </a>
</div>

</section>

@endsection



