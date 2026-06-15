@extends('layouts.app')

@section('contenido')

<div class="container" style="padding-top:250px; margin-bottom:80px; max-width:800px;">

<h1 class="mb-4">
    Agregar Producto
</h1>


@if($errors->any())

<div class="alert alert-danger">

<ul>

@foreach($errors->all() as $error)

<li>{{ $error }}</li>

@endforeach

</ul>

</div>

@endif



<form action="/admin/productos" 
method="POST"
enctype="multipart/form-data">

@csrf


<div class="mb-3">

<label class="form-label">
Imagen del producto
</label>


<input 
type="file"
name="imagen"
class="form-control">


@error('imagen')
<div class="text-danger">
{{ $message }}
</div>
@enderror


</div>

<div class="mb-3">

<label class="form-label">
Nombre
</label>

<input 
type="text" 
name="nombre" 
class="form-control"
value="{{ old('nombre') }}">

</div>

<div class="mb-3">

<label class="form-label">
Descripción
</label>

<textarea 
name="descripcion" 
class="form-control"
rows="4">{{ old('descripcion') }}</textarea>

</div>



<div class="mb-3">

<label class="form-label">
Precio
</label>

<input 
type="number"
step="0.01"
name="precio"
class="form-control"
value="{{ old('precio') }}">

</div>



<div class="mb-3">

<label class="form-label">
Stock
</label>

<input 
type="number"
name="stock"
class="form-control"
value="{{ old('stock') }}">

</div>



<div class="mb-3">

<label class="form-label">
Categoría
</label>


<select name="categoria" class="form-control">


<option value="">
Seleccione categoría
</option>


<option value="roll"
{{ old('categoria') == 'roll' ? 'selected' : '' }}>
Roll
</option>


<option value="cookie"
{{ old('categoria') == 'cookie' ? 'selected' : '' }}>
Cookie
</option>


<option value="torta"
{{ old('categoria') == 'torta' ? 'selected' : '' }}>
Torta
</option>


</select>


</div>



<div class="form-check mb-4">


<input 
type="checkbox"
name="activo"
value="1"
checked
class="form-check-input">


<label class="form-check-label">
Producto activo
</label>


</div>




<button 
type="submit"
class="btn btn-success">

Guardar Producto

</button>



<a href="/admin/productos"
class="btn btn-secondary">

Volver

</a>



</form>


</div>


@endsection