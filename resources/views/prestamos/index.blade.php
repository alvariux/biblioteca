@extends('layout.admin')

@section('content')
<div class="container mx-auto px-4 py-8">
    <h1 class="text-2xl font-bold mb-6">Prestamos</h1>

    @if(session('error'))
        <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded mb-4">
            {{ session('error') }}
        </div>
    @endif

    <a href="{{ route('prestamos.create') }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Crear Prestamo</a>

    <div class="bg-white shadow-md rounded-lg p-6 mt-4">
        <table class="min-w-full table-auto">
        <thead>
            <tr>
                <th class="px-4 py-2 border-b">ID</th>
                <th class="px-4 py-2 border-b">Libro</th>
                <th class="px-4 py-2 border-b">Usuario</th>
                <th class="px-4 py-2 border-b">Fecha</th>
                <th class="px-4 py-2 border-b">Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach($prestamos as $prestamo)
                <tr>
                    <td class="px-4 py-2 border-b">{{ $prestamo->id }}</td>
                    <td class="px-4 py-2 border-b">{{ $prestamo->libro->nombre }}</td>
                    <td class="px-4 py-2 border-b">{{ $prestamo->usuario->name }}</td>
                    <td class="px-4 py-2 border-b">{{ $prestamo->created_at->format('Y-m-d') }}</td>
                    <td class="px-4 py-2 border-b">
                        <!-- Aquí puedes agregar botones para editar o eliminar el préstamo -->
                    </td>
                </tr>
            @endforeach
        </tbody>
        </table>
    </div>
</div>
@endsection