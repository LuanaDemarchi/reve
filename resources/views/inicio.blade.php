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

<div class="prod<section class="conocenos-home">
    <div class="conocenos-contenido">
        <h2>Conocenos</h2>
        <a href="/quienes_somos" class="btn-conocenos" style="margin-bottom: 15px;">
            Quienes Somos
        </a>

        <div class="auth-home-actions" style="margin-top: 20px;">
            @guest
                <p style="color: #555; margin-bottom: 10px;">¡Crea tu cuenta para hacer pedidos!</p>
                <a href="{{ route('registro') }}" class="btn-conocenos" style="background-color: #d4a373; color: white;">
                    Registrarse
                </a>
                <a href="{{ route('login') }}" class="btn-conocenos" style="background-color: transparent; border: 2px solid #d4a373; color: #d4a373; margin-left: 10px;">
                    Iniciar Sesión
                </a>
            @endguest

            @auth
                <h3 style="color: #d4a373; margin-bottom: 10px;">¡Hola de nuevo, {{ auth()->user()->name }}!</h3>
                
                <form action="{{ route('logout') }}" method="POST" style="display: inline;">
                    @csrf
                    <button type="submit" class="btn-conocenos" style="background-color: #e63946; color: white; border: none; cursor: pointer;">
                        Cerrar Sesión
                    </button>
                </form>
            @endauth
        </div>
    </div>  
</section>