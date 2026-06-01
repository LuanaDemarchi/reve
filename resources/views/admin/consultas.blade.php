@extends('layouts.app')

@section('contenido')
<main class="max-w-5xl mx-auto px-6 py-40">
    <div class="mb-8 flex justify-between items-center">
        <div>
            <h2 class="text-4xl font-serif text-[#4e2d2d] tracking-wider mb-2">Bandeja de Consultas</h2>
            <p class="text-gray-600">Mensajes recibidos a través del formulario de contacto.</p>
        </div>
    </div>

    <!-- Mensaje de confirmación cuando se borra -->
    @if (session('success_message'))
        <div class="bg-green-600 text-white p-4 mb-6 rounded shadow-sm">
            {{ session('success_message') }}
        </div>
    @endif

    @if($consultas->isEmpty())
        <div class="bg-white border border-gray-200 text-center py-12 rounded-lg shadow-sm">
            <p class="text-gray-500 text-lg">No hay consultas ni mensajes por el momento. ✨</p>
        </div>
    @else
        <div class="space-y-6">
            @foreach($consultas as $consulta)
                <div class="bg-white border border-gray-200 shadow-sm rounded-lg p-6 hover:shadow-md transition relative group">
                    <div class="flex justify-between items-start border-b border-gray-100 pb-3 mb-4">
                        <div>
                            <h3 class="text-xl font-semibold text-gray-800">{{ $consulta->asunto ?? 'Sin Asunto' }}</h3>
                            <p class="text-sm text-gray-500">
                                Por: <span class="font-medium text-gray-700">{{ $consulta->nombre }}</span> 
                                (<span class="italic">{{ $consulta->email }}</span>)
                            </p>
                        </div>
                        
                        <div class="flex items-center gap-4">
                            <span class="text-xs bg-gray-100 text-gray-600 px-3 py-1 rounded-full font-mono">
                                {{ $consulta->created_at->format('d/m/Y H:i') }}
                            </span>
                            
                            <!-- Botón de Eliminar consulta -->
                            <form action="{{ route('admin.consultas.destroy', $consulta->id) }}" method="POST" onsubmit="return confirm('¿Estás seguro de que querés eliminar esta consulta?');">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="text-red-500 hover:text-red-700 text-sm font-medium transition p-1">
                                    Borrar
                                </button>
                            </form>
                        </div>
                    </div>
                    <div class="text-gray-700 whitespace-pre-line">
                        {{ $consulta->mensaje }}
                    </div>
                </div>
            @endforeach
        </div>
    @endif
</main>
@endsection