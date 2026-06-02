<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>ReVe</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css2?family=Cinzel:wght@400;500;600&family=Montserrat:wght@400;500&family=Playfair+Display:wght@500&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">

    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body>

<header class="navbar">

    <div class="nav-top">
        <h2>ReVe Pâtissière</h2>
    </div>

    <div class="nav-line"></div>

    <nav class="nav-menu">

        {{-- VISITANTE --}}
        @guest

            <a href="/">Inicio</a>
            <a href="/productos">Productos</a>
            <a href="/quienes_somos">Quiénes Somos</a>
            <a href="/informacion">Información</a>
            <a href="/contacto">Contacto</a>

            <a href="{{ route('registro') }}">
                Registrarse
            </a>

            <a href="{{ route('login') }}">
                Iniciar Sesión
            </a>

        @endguest


        {{-- USUARIO LOGUEADO --}}
        @auth

            {{-- ADMIN --}}
            @if(auth()->user()->rol === 'admin')

                <a href="/admin/productos">
                    Catálogo
                </a>

                <a href="/admin/productos/create">
                    Agregar Producto
                </a>

                <a href="/admin/ventas">
                    Ventas
                </a>

                <a href="/admin/usuarios">
                    Usuarios
                </a>

                <a href="/admin/consultas">
                    Consultas
                </a>

                <span style="color:#666;padding:0 10px;">
                    {{ auth()->user()->name }}
                </span>

                <a href="{{ route('logout') }}"
                   onclick="event.preventDefault();
                   document.getElementById('logout-form').submit();">
                    Salir
                </a>

            @else

                {{-- CLIENTE --}}
                <a href="/">Inicio</a>
                <a href="/productos">Productos</a>
                <a href="/quienes_somos">Quiénes Somos</a>
                <a href="/informacion">Información</a>
                <a href="/contacto">Contacto</a>

                <a href="/carrito">
                    Mi Carrito
                </a>

                <span style="color:#666;padding:0 10px;">
                    {{ auth()->user()->name }}
                </span>

                <a href="{{ route('logout') }}"
                   onclick="event.preventDefault();
                   document.getElementById('logout-form').submit();">
                    Salir
                </a>

            @endif

        @endauth

    </nav>

</header>

{{-- CONTENIDO DE CADA VISTA --}}
@yield('contenido')

<footer class="footer-reve">

    <div class="footer-top">

        <div class="footer-col">
            <h3>ReVé</h3>

            <a href="/quienes_somos">Quiénes Somos</a>
            <a href="/productos">Productos</a>
            <a href="/informacion">Información</a>
        </div>

        <div class="footer-col">
            <h3>Información</h3>

            <a href="/contacto">Contacto</a>
            <a href="/terminos">Términos y Usos</a>
            <a href="/terminos">Políticas de Privacidad</a>
        </div>

        <div class="footer-col">
            <h3>Redes</h3>

            <a href="https://www.instagram.com/revepatissiere?igsh=ODF1dDg2dTlzYm5h&utm_source=qr">
                Instagram
            </a>

            <a href="/contacto">
                Whatsapp
            </a>

            <a href="/contacto">
                Correo
            </a>
        </div>

    </div>

    <div class="footer-bottom">
        <p>© 2026 ReVé Pâtissière — Todos los derechos reservados.</p>
    </div>

</footer>

<form id="logout-form"
      action="{{ route('logout') }}"
      method="POST"
      style="display:none;">
    @csrf
</form>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>