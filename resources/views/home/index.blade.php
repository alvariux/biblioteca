@extends('layout.admin')

@section('content')
<!-- Contenido principal -->
<main class="flex-1 overflow-y-auto p-4 md:p-6">
    <!-- Breadcrumbs -->
    <nav class="mb-6 text-sm text-gray-600">
        <ol class="flex space-x-2">
            <li><a href="#inicio" class="hover:text-blue-600">Inicio</a></li>
            <li><span class="mx-2">/</span></li>
            <li class="text-blue-600 font-medium" id="current-page">Libros</li>
        </ol>
    </nav>
    
    <!-- Título de sección -->
    <div class="mb-6">
        <h1 class="text-2xl md:text-3xl font-bold text-gray-800" id="main-title">Gestión de Libros</h1>
        <p class="text-gray-600 mt-2">Administra el catálogo de libros de la biblioteca</p>
    </div>
    
    <!-- Tarjetas de estadísticas -->
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-4 mb-8">
        <div class="bg-white rounded-lg shadow p-5">
            <div class="flex items-center justify-between">
                <div>
                    <p class="text-gray-500 text-sm">Total de libros</p>
                    <p class="text-2xl font-bold mt-1">1,247</p>
                </div>
                <div class="w-12 h-12 rounded-full bg-blue-100 flex items-center justify-center">
                    <i class="fas fa-book text-blue-600 text-xl"></i>
                </div>
            </div>
            <p class="text-green-600 text-sm mt-3">
                <i class="fas fa-arrow-up mr-1"></i> 5.2% desde el mes pasado
            </p>
        </div>
        
        <div class="bg-white rounded-lg shadow p-5">
            <div class="flex items-center justify-between">
                <div>
                    <p class="text-gray-500 text-sm">Libros prestados</p>
                    <p class="text-2xl font-bold mt-1">189</p>
                </div>
                <div class="w-12 h-12 rounded-full bg-yellow-100 flex items-center justify-center">
                    <i class="fas fa-exchange-alt text-yellow-600 text-xl"></i>
                </div>
            </div>
            <p class="text-red-600 text-sm mt-3">
                <i class="fas fa-arrow-down mr-1"></i> 2.1% desde el mes pasado
            </p>
        </div>
        
        <div class="bg-white rounded-lg shadow p-5">
            <div class="flex items-center justify-between">
                <div>
                    <p class="text-gray-500 text-sm">Usuarios activos</p>
                    <p class="text-2xl font-bold mt-1">543</p>
                </div>
                <div class="w-12 h-12 rounded-full bg-green-100 flex items-center justify-center">
                    <i class="fas fa-users text-green-600 text-xl"></i>
                </div>
            </div>
            <p class="text-green-600 text-sm mt-3">
                <i class="fas fa-arrow-up mr-1"></i> 12.7% desde el mes pasado
            </p>
        </div>
        
        <div class="bg-white rounded-lg shadow p-5">
            <div class="flex items-center justify-between">
                <div>
                    <p class="text-gray-500 text-sm">Devoluciones pendientes</p>
                    <p class="text-2xl font-bold mt-1">24</p>
                </div>
                <div class="w-12 h-12 rounded-full bg-red-100 flex items-center justify-center">
                    <i class="fas fa-clock text-red-600 text-xl"></i>
                </div>
            </div>
            <p class="text-red-600 text-sm mt-3">
                <i class="fas fa-arrow-up mr-1"></i> 3.4% desde ayer
            </p>
        </div>
    </div>
    
    <!-- Contenido dinámico -->
    <div id="dynamic-content" class="bg-white rounded-lg shadow overflow-hidden">
        <!-- Tabla de libros (contenido de ejemplo) -->
        <div class="p-4 border-b">
            <div class="flex justify-between items-center">
                <h2 class="text-lg font-semibold">Lista de Libros</h2>
                <a href="{{ route('libros.create') }}" class="bg-blue-600 hover:bg-blue-700 text-white py-2 px-4 rounded-md flex items-center">
                    <i class="fas fa-plus mr-2"></i> Agregar libro
                </a>
            </div>
        </div>
        
        <div class="overflow-x-auto">
            <table class="min-w-full divide-y divide-gray-200">
                <thead class="bg-gray-50">
                    <tr>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Título</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Autor</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">ISBN</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Categoría</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Disponibilidad</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Acciones</th>
                    </tr>
                </thead>
                <tbody class="bg-white divide-y divide-gray-200">
                    @foreach($libros as $libro)
                    <tr>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <div class="font-medium text-gray-900">{{ $libro->nombre }}</div>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <div class="text-gray-900">{{ $libro->autor }}</div>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <div class="text-gray-900">{{ $libro->isbn }}</div>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-blue-100 text-blue-800">{{ $libro->categoria->nombre }}</span>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">Disponible</span>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">
                            <a href="#" class="text-blue-600 hover:text-blue-900 mr-3">Editar</a>
                            <a href="#" class="text-red-600 hover:text-red-900">Eliminar</a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        
        <!-- Paginación -->
        <div class="px-6 py-4 border-t border-gray-200 flex items-center justify-between">
            <div class="text-sm text-gray-700">
                Mostrando <span class="font-medium">1</span> a <span class="font-medium">3</span> de <span class="font-medium">1,247</span> resultados
            </div>
            <div class="flex space-x-2">
                <button class="px-3 py-1 rounded-md border border-gray-300 text-gray-700 hover:bg-gray-50">Anterior</button>
                <button class="px-3 py-1 rounded-md bg-blue-600 text-white">1</button>
                <button class="px-3 py-1 rounded-md border border-gray-300 text-gray-700 hover:bg-gray-50">2</button>
                <button class="px-3 py-1 rounded-md border border-gray-300 text-gray-700 hover:bg-gray-50">3</button>
                <button class="px-3 py-1 rounded-md border border-gray-300 text-gray-700 hover:bg-gray-50">Siguiente</button>
            </div>
        </div>
    </div>
</main>
@endsection