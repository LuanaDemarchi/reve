
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
    content="width=device-width, initial-scale=1.0">

    <title>ReVe</title>
   
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500&family=Playfair+Display:wght@500&display=swap" rel="stylesheet">
  
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
        <a href="/">Inicio</a>
        <a href="/productos">Productos</a>
        <a href="/quienes_somos">Quienes Somos</a>
        <a href="/informacion">Información</a>
        <a href="/contacto">Contacto</a>
    </nav>

</header>

@yield('contenido')

<footer class="footer-reve">

<div class="footer-top">

<div class="footer-col">
<h3>ReVé</h3>

<a href="/quienes_somos">Quiénes Somos</a>
<a href="/productos">Productos</a>
<a href="/informacion">informacion</a>

</div>


<div class="footer-col">
<h3>Información</h3>

<a href="/contacto">Contacto</a>
<a href="/terminos">Términos y Usos</a>
<a href="/terminos">Políticas de Privacidad</a>

</div>

<div class="footer-col">
<h3>Redes</h3>

<a href="https://www.instagram.com/revepatissiere?igsh=ODF1dDg2dTlzYm5h&utm_source=qr">Instagram</a>
<a href="/contacto"> Whatsapp</a>
<a href="/contacto">Correo</a>

</div>
</div>

<div class="footer-bottom">
<p>© 2026 ReVé Pâtissière — Todos los derechos reservados.</p>
</div>

</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>