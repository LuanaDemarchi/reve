@extends('layouts.app')

@section('contenido')

<div class="container" style="padding-top:220px; padding-bottom:80px;">

    <h1 class="mb-4">
        Listado de Ventas
    </h1>

    <table class="table table-bordered">

        <thead>

        <tr>
            <th>ID</th>
            <th>Cliente</th>
            <th>Total</th>
            <th>Estado</th>
            <th>Fecha</th>
        </tr>

        </thead>

        <tbody>

        @forelse($ventas as $venta)

<tr>

    <td>{{ $venta->id }}</td>

    <td>
        {{ $venta->cliente->nombre ?? 'Sin cliente' }}
    </td>

    <td>
        ${{ $venta->total }}
    </td>

    <td>
        {{ $venta->estado }}
    </td>

    <td>
        {{ $venta->created_at }}
    </td>

</tr>

@empty

<tr>
    <td colspan="5" class="text-center">
        No hay ventas registradas
    </td>
</tr>

@endforelse

        </tbody>

    </table>

</div>

@endsection