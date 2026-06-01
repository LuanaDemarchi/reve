@extends('layouts.app')

@section('contenido')
<main class="max-w-5xl mx-auto px-6 py-40">
    <div class="mb-8">
        <h2 class="text-4xl font-serif text-[#4e2d2d] tracking-wider mb-2">Clientes Registrados</h2>
        <p class="text-gray-600">Lista completa de usuarios almacenados en el sistema.</p>
    </div>

    <div class="bg-white border border-gray-250 shadow-sm rounded-lg p-6 overflow-x-auto">
        <table class="w-full text-left border-collapse text-gray-800">
            <thead>
                <tr class="border-b-2 border-gray-200 text-[#4e2d2d] font-bold">
                    <th class="pb-3">ID</th>
                    <th class="pb-3">Nombre</th>
                    <th class="pb-3">Email</th>
                    <th class="pb-3">Rol del Usuario</th>
                </tr>
            </thead>
            <tbody>
                @foreach($usuarios as $user)
                    <tr class="border-b border-gray-100 hover:bg-gray-50 transition">
                        <td class="py-4 text-gray-500">#{{ $user->id }}</td>
                        <td class="py-4 font-semibold">{{ $user->name }}</td>
                        <td class="py-4 text-gray-650">{{ $user->email }}</td>
                        <td class="py-4">
                            <span class="px-3 py-1 rounded-full text-xs font-bold {{ $user->rol === 'admin' ? 'bg-amber-100 text-amber-800' : 'bg-blue-100 text-blue-800' }}">
                                {{ ucfirst($user->rol) }}
                            </span>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</main>
@endsection