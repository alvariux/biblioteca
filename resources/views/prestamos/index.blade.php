@extends('layout.admin')

@section('content')
<div class="container mx-auto px-4 py-8">
    <h1 class="text-2xl font-bold mb-6">Prestamos</h1>

    <a href="" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Crear Prestamo</a>

    <div class="bg-white shadow-md rounded-lg p-6 mt-4">
        <table class="min-w-full table-auto">
        <thead>
            <tr>
                <th class="px-4 py-2 border-b">ID</th>
                <th class="px-4 py-2 border-b"></th>
                <th class="px-4 py-2 border-b"></th>
                <th class="px-4 py-2 border-b"></th>
                <th class="px-4 py-2 border-b">Acciones</th>
            </tr>
        </thead>
        <tbody>
        </tbody>
        </table>
    </div>
</div>
@endsection