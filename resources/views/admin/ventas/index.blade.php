@extends('layouts.app')

@section('contenido')

<div class="container" style="padding-top:220px; padding-bottom:80px;">

    <h1 class="mb-4">Listado de Ventas</h1>

    @if(session('success'))
        <div class="alert alert-success mb-4">
            {{ session('success') }}
        </div>
    @endif


    <table class="table table-bordered table-hover">

        <thead class="table-dark">
            <tr>
                <th>ID</th>
                <th>Cliente</th>
                <th>Teléfono</th>
                <th>Dirección</th>
                <th>Total</th>
                <th>Estado</th>
                <th>Fecha</th>
                <th>Cambiar Estado</th>
                <th>Detalle</th>
            </tr>
        </thead>


        <tbody>

        @forelse($ventas as $venta)

            <tr>

                <td>{{ $venta->id }}</td>


                <td>
                    {{ $venta->cliente->name ?? 'Sin cliente' }}
                </td>


                <td>
                    {{ $venta->telefono ?? '-' }}
                </td>


                <td>
                    {{ $venta->direccion ?? '-' }}
                </td>


                <td>
                    ${{ number_format($venta->total,0,',','.') }}
                </td>


                <td>

                    <span class="badge 
                        {{ $venta->estado == 'Pendiente' ? 'bg-warning text-dark' : '' }}
                        {{ $venta->estado == 'En preparación' ? 'bg-info text-dark' : '' }}
                        {{ $venta->estado == 'Enviado' ? 'bg-primary' : '' }}
                        {{ $venta->estado == 'Entregado' ? 'bg-success' : '' }}
                        {{ $venta->estado == 'Cancelado' ? 'bg-danger' : '' }}
                    ">

                        {{ $venta->estado }}

                    </span>

                </td>


                <td>
                    {{ $venta->created_at->format('d/m/Y H:i') }}
                </td>



                <td>

                    <form action="/admin/ventas/{{ $venta->id }}/estado" 
                    method="POST" 
                    class="d-flex gap-2">

                        @csrf
                        @method('PUT')


                        <select name="estado" class="form-select form-select-sm">

                            <option value="Pendiente"
                            {{ $venta->estado == 'Pendiente' ? 'selected':'' }}>
                            Pendiente
                            </option>


                            <option value="En preparación"
                            {{ $venta->estado == 'En preparación' ? 'selected':'' }}>
                            En preparación
                            </option>


                            <option value="Enviado"
                            {{ $venta->estado == 'Enviado' ? 'selected':'' }}>
                            Enviado
                            </option>


                            <option value="Entregado"
                            {{ $venta->estado == 'Entregado' ? 'selected':'' }}>
                            Entregado
                            </option>


                            <option value="Cancelado"
                            {{ $venta->estado == 'Cancelado' ? 'selected':'' }}>
                            Cancelado
                            </option>


                        </select>


                        <button class="btn btn-dark btn-sm">
                            Guardar
                        </button>


                    </form>

                </td>



                {{-- DETALLE DE VENTA --}}
                <td>


                    <button 
                    type="button"
                    class="btn btn-outline-dark btn-sm"
                    onclick="mostrarDetalle({{ $venta->id }})">

                    Ver

                    </button>


                    <div 
                    id="detalle{{ $venta->id }}" 
                    style="display:none;"
                    class="mt-2">

                        <div class="card card-body">


                            @foreach($venta->detalles as $detalle)


                                <div>


                                    <strong>
                                    {{ $detalle->cantidad }}x
                                    {{ $detalle->producto->nombre }}
                                    </strong>


                                    <br>


                                    Precio:
                                    ${{ number_format($detalle->precio_unitario,0,',','.') }}


                                    <br>


                                    Subtotal:
                                    ${{ number_format($detalle->subtotal,0,',','.') }}


                                </div>


                                <hr>


                            @endforeach


                        </div>


                    </div>


                </td>


            </tr>


        @empty


            <tr>

                <td colspan="9" class="text-center text-muted py-4">

                    No hay ventas registradas

                </td>

            </tr>


        @endforelse


        </tbody>


    </table>


</div>

<script>

function mostrarDetalle(id){

    let detalle = document.getElementById('detalle' + id);

    if(detalle.style.display === "none" || detalle.style.display === ""){

        detalle.style.display = "block";

    }else{

        detalle.style.display = "none";

    }

}

</script>
@endsection