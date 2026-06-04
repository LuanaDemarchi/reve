@extends('layouts.app')

@section('contenido')

<div class="container" style="padding-top:250px; margin-bottom:80px; max-width:800px;">
    <h1 class="mb-4">
        Agregar Producto
    </h1>

    <form action="/admin/productos" method="POST">

        @csrf

        <div class="mb-3">
            <label class="form-label">Nombre</label>
            <input type="text" name="nombre" class="form-control" required>
        </div>

        <div class="mb-3">
            <label class="form-label">Descripción</label>
            <textarea name="descripcion" class="form-control" rows="4"></textarea>
        </div>

        <div class="mb-3">
            <label class="form-label">Precio</label>
            <input type="number" step="0.01" name="precio" class="form-control" required>
        </div>

        <div class="mb-3">
            <label class="form-label">Stock</label>
            <input type="number" name="stock" class="form-control" required>
        </div>

        <div class="mb-3">
            <label class="form-label">URL de Imagen</label>
            {{-- CORREGIDO: Cambiado url_imagen por imagen --}}
            <input type="text" name="url_imagen" class="form-control">
        </div>

        <div class="form-check mb-4">
            <input type="checkbox" name="activo" value="1" checked class="form-check-input">
            <label class="form-check-label">Producto activo</label>
        </div>

        <button type="submit" class="btn btn-success">
            Guardar Producto
        </button>

        <a href="/admin/productos" class="btn btn-secondary">
            Volver
        </a>

    </form>
</div>

@endsection