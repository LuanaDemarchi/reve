@extends('layouts.app')

@section('contenido')

<div class="container" style="margin-top:220px; max-width:700px;">

    <h1 class="mb-4">Editar Producto</h1>

    <form action="/admin/productos/{{ $producto->id }}" method="POST">

        @csrf
        @method('PUT')

        <div class="mb-3">
            <label>Nombre</label>

            <input
                type="text"
                name="nombre"
                class="form-control"
                value="{{ $producto->nombre }}"
                required>
        </div>

        <div class="mb-3">
            <label>Descripción</label>

            <textarea
                name="descripcion"
                class="form-control"
                rows="4">{{ $producto->descripcion }}</textarea>
        </div>

        <div class="mb-3">
            <label>Precio</label>

            <input
                type="number"
                step="0.01"
                name="precio"
                class="form-control"
                value="{{ $producto->precio }}"
                required>
        </div>

        <div class="mb-3">
            <label>Stock</label>

            <input
                type="number"
                name="stock"
                class="form-control"
                value="{{ $producto->stock }}"
                required>
        </div>

        <div class="mb-3">
            <label>Categoría</label>

            <select name="categoria" class="form-control">

                <option value="roll"
                    {{ $producto->categoria == 'roll' ? 'selected' : '' }}>
                    Roll
                </option>

                <option value="cookie"
                    {{ $producto->categoria == 'cookie' ? 'selected' : '' }}>
                    Cookie
                </option>

                <option value="torta"
                    {{ $producto->categoria == 'torta' ? 'selected' : '' }}>
                    Torta
                </option>

            </select>
        </div>

        <div class="mb-3">
            <label>URL Imagen</label>

            <input
                type="text"
                name="url_imagen"
                class="form-control"
                value="{{ $producto->url_imagen }}">
        </div>

        <div class="mb-3">
            <label>Activo</label>

            <select name="activo" class="form-control">

                <option value="1"
                    {{ $producto->activo ? 'selected' : '' }}>
                    Sí
                </option>

                <option value="0"
                    {{ !$producto->activo ? 'selected' : '' }}>
                    No
                </option>

            </select>
        </div>

        <button class="btn btn-success">
            Guardar Cambios
        </button>

        <a href="/admin/productos"
           class="btn btn-secondary">
            Volver
        </a>

    </form>

</div>

@endsection