@extends('layouts.app')

@section('contenido')

<div class="container" style="margin-top:220px; margin-bottom:80px;">

    <div class="d-flex justify-content-between align-items-center mb-4">

        <h1>Catálogo de Productos</h1>

        <a href="/admin/productos/create" class="btn btn-dark">
            Agregar Producto
        </a>

    </div>

    <table class="table table-bordered table-hover">

        <thead class="table-dark">
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Precio</th>
                <th>Stock</th>
                <th>Acciones</th>
            </tr>
        </thead>

        <tbody>

            @foreach($productos as $producto)

            <tr>

                <td>{{ $producto->id }}</td>

                <td>{{ $producto->nombre }}</td>

                <td>${{ $producto->precio }}</td>

                <td>{{ $producto->stock }}</td>

                <td>

                    <a href="/admin/productos/{{ $producto->id }}/edit"
                       class="btn btn-warning btn-sm">
                        Editar
                    </a>

                    <form action="/admin/productos/{{ $producto->id }}"
                          method="POST"
                          style="display:inline-block;">

                        @csrf
                        @method('DELETE')

                        <button type="submit"
                                class="btn btn-danger btn-sm">
                            Eliminar
                        </button>

                    </form>

                </td>

            </tr>

            @endforeach

        </tbody>

    </table>

</div>

@endsection