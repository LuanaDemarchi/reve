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
width:500px;
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
Bienvenida
</h1>
</div>

<form method="POST" action="/login">

@csrf

<div class="mb-4">

<label style="margin-bottom:8px;">
Email
</label>

<input
type="email"
name="email"
class="form-control">

</div>

<div class="mb-4">

<label style="margin-bottom:8px;">
Contraseña
</label>

<input
type="password"
name="password"
class="form-control">

</div>

<button
type="submit"
class="btn btn-dark w-100">

Ingresar

</button>

</form>

<div style="
text-align:center;
margin-top:25px;
">

¿No tenés cuenta?

<a href="/registro">
Registrate
</a>

</div>

</div>

</section>

@endsection