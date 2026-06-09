@extends('layouts.app')

@section('contenido')
<main class="max-w-5xl mx-auto px-6 py-40">
    <div class="mb-8 flex justify-between items-center">
        <div>
            <h2 class="text-4xl font-serif text-[#4e2d2d] tracking-wider mb-2">Bandeja de Consultas</h2>
            <p class="text-gray-600">Mensajes recibidos a través del formulario de contacto.</p>
        </div>
    </div>

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
                            {{-- Badge de estado --}}
                            @if($consulta->estado == 'Respondido')
                                <span class="text-xs bg-green-100 text-green-700 px-3 py-1 rounded-full font-semibold">
                                    ✅ Respondido
                                </span>
                            @else
                                <span class="text-xs bg-yellow-100 text-yellow-700 px-3 py-1 rounded-full font-semibold">
                                    ⏳ Pendiente
                                </span>
                            @endif

                            <span class="text-xs bg-gray-100 text-gray-600 px-3 py-1 rounded-full font-mono">
                                {{ $consulta->created_at->format('d/m/Y H:i') }}
                            </span>

                            <form action="{{ route('admin.consultas.destroy', $consulta->id) }}" method="POST" onsubmit="return confirm('¿Estás seguro de que querés eliminar esta consulta?');">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="text-red-500 hover:text-red-700 text-sm font-medium transition p-1">
                                    Borrar
                                </button>
                            </form>
                        </div>
                    </div>

                    {{-- Mensaje --}}
                    <div class="text-gray-700 whitespace-pre-line mb-4">
                        {{ $consulta->mensaje }}
                    </div>

                    {{-- Si ya fue respondida, mostrar la respuesta --}}
                    @if($consulta->estado == 'Respondido' && $consulta->respuesta)
                        <div class="bg-green-50 border border-green-200 rounded p-3 mb-4">
                            <p class="text-sm text-green-800 font-semibold mb-1">Respuesta enviada:</p>
                            <p class="text-sm text-green-700">{{ $consulta->respuesta }}</p>
                        </div>
                    @endif

                    {{-- Formulario para responder --}}
                    @if($consulta->estado != 'Respondido')
                        <form action="{{ route('admin.consultas.responder', $consulta->id) }}" method="POST" class="mt-3">
                            @csrf
                            @method('PUT')
                            <textarea name="respuesta" rows="2" required
                                class="w-full border border-gray-300 rounded p-2 text-sm mb-2"
                                placeholder="Escribí una nota interna o respuesta..."></textarea>
                            <button type="submit" class="bg-gray-800 text-white text-sm px-4 py-2 rounded hover:bg-gray-700 transition">
                                Marcar como Respondido
                            </button>
                        </form>
                    @endif

                </div>
            @endforeach
        </div>
    @endif
</main>
@endsection