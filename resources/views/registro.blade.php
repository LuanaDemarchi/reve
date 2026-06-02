@extends('layouts.app')

@section('contenido')

<section style="
min-height:100vh;
background:#f8f4ee;
display:flex;
justify-content:center;
align-items:center;
padding-top:220px;
padding-bottom:100px;
">

<div style="
width:600px;
background:white;
padding:60px;
box-shadow:0 15px 40px rgba(0,0,0,.08);
border-radius:8px;
">

<div style="text-align:center;margin-bottom:40px;">

<span style="
letter-spacing:4px;
text-transform:uppercase;
font-size:13px;
color:#8c7a6b;
">
ReVé Pâtissière
</span>

<h1 style="
font-family:'Cinzel', serif;
font-size:48px;
margin-top:15px;
color:#4e2d2d;
">
Crear Cuenta
</h1>

</div>

<form method="POST" action="/registro">

@csrf

<div class="mb-3">

<label>Nombre</label>

<input
type="text"
name="name"
class="form-control">

</div>

<div class="mb-3">

<label>Email</label>

<input
type="email"
name="email"
class="form-control">

</div>

<div class="mb-4">

<label>Contraseña</label>

<input
type="password"
name="password"
class="form-control">

</div>

<div class="mb-4">

<label>Confirmar Contraseña</label>

<input
type="password"
name="password_confirmation"
class="form-control">

</div>

<button
type="submit"
class="btn btn-dark w-100">

Registrarme

</button>

</form>

<div style="
text-align:center;
margin-top:25px;
">

¿Ya tenés cuenta?

<a href="/login">
Iniciar sesión
</a>

</div>

</div>

</section>

@endsection