@extends('layout.auth')

@section('content')
<!-- Contenedor principal para ambos formularios -->
    <div class="w-full max-w-6xl mx-auto">
        <!-- Encabezado -->
        <header class="text-center mb-12">
            <div class="flex justify-center mb-4">
                <div class="w-16 h-16 rounded-full bg-gradient-to-r from-blue-600 to-indigo-700 flex items-center justify-center shadow-lg">
                    <i class="fas fa-book text-white text-3xl"></i>
                </div>
            </div>
            <h1 class="text-3xl md:text-4xl font-bold text-gray-800 mb-3">Biblioteca Municipal</h1>
            <p class="text-gray-600 max-w-2xl mx-auto text-lg">Accede a tu cuenta o regístrate para disfrutar de todos nuestros servicios</p>
        </header>
        
        <!-- Contenedor de formularios en columnas -->
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-8">
            
            <!-- Columna 1: Formulario de Login -->
            <div class="flex flex-col">
                <div class="form-container">
                    <h2 class="form-title">Iniciar Sesión</h2>
                    <p class="form-subtitle">Accede a tu cuenta de la biblioteca</p>
                    
                    <form id="loginForm">
                        <!-- Campo Email -->
                        <div class="form-group">
                            <label for="loginEmail" class="form-label">
                                <i class="fas fa-envelope mr-2 text-blue-500"></i>Correo electrónico
                            </label>
                            <div class="form-input-wrapper">
                                <input 
                                    type="email" 
                                    id="loginEmail" 
                                    name="email"
                                    placeholder="usuario@ejemplo.com"
                                    class="form-input pl-12"
                                    required
                                >
                                <div class="form-input-icon">
                                    <i class="fas fa-user"></i>
                                </div>
                            </div>
                        </div>
                        
                        <!-- Campo Contraseña -->
                        <div class="form-group">
                            <div class="flex justify-between items-center mb-2">
                                <label for="loginPassword" class="form-label">
                                    <i class="fas fa-lock mr-2 text-blue-500"></i>Contraseña
                                </label>
                                <a href="#forgot-password" class="text-sm form-link">
                                    ¿Olvidaste tu contraseña?
                                </a>
                            </div>
                            <div class="form-input-wrapper">
                                <input 
                                    type="password" 
                                    id="loginPassword" 
                                    name="password"
                                    placeholder="Introduce tu contraseña"
                                    class="form-input pl-12"
                                    required
                                >
                                <div class="form-input-icon">
                                    <i class="fas fa-key"></i>
                                </div>
                                <button 
                                    type="button" 
                                    id="toggleLoginPassword" 
                                    class="absolute right-4 top-3.5 text-gray-400 hover:text-gray-600"
                                    aria-label="Mostrar/Ocultar contraseña"
                                >
                                    <i class="fas fa-eye"></i>
                                </button>
                            </div>
                        </div>
                        
                        <!-- Opción Recordar sesión -->
                        <div class="form-group flex items-center mb-8">
                            <input 
                                type="checkbox" 
                                id="rememberMe" 
                                name="rememberMe"
                                class="h-5 w-5 rounded border-gray-300 text-blue-600 focus:ring-blue-500"
                            >
                            <label for="rememberMe" class="ml-2 text-gray-700">
                                Recordar sesión
                            </label>
                        </div>
                        
                        <!-- Botón de inicio de sesión -->
                        <button type="submit" class="form-button-primary mb-4">
                            <i class="fas fa-sign-in-alt mr-2"></i> Iniciar Sesión
                        </button>
                        
                        <!-- Separador -->
                        <div class="form-separator">
                            <div class="form-separator-line"></div>
                            <span class="form-separator-text">O</span>
                        </div>
                        
                        <!-- Inicio de sesión con redes sociales -->
                        <div class="grid grid-cols-2 gap-4 mb-6">
                            <button type="button" class="form-button-secondary">
                                <i class="fab fa-google text-red-500 mr-2"></i> Google
                            </button>
                            <button type="button" class="form-button-secondary">
                                <i class="fab fa-facebook text-blue-600 mr-2"></i> Facebook
                            </button>
                        </div>
                        
                        <!-- Enlace a registro -->
                        <div class="form-footer">
                            <p>
                                ¿No tienes una cuenta? 
                                <a href="#register" class="form-link">Regístrate aquí</a>
                            </p>
                        </div>
                    </form>
                </div>
                
                <!-- Información adicional para login -->
                <div class="mt-6 bg-blue-50 border border-blue-200 rounded-xl p-5">
                    <h3 class="font-bold text-blue-800 mb-2 flex items-center">
                        <i class="fas fa-info-circle mr-2"></i> ¿Primera vez en la biblioteca?
                    </h3>
                    <p class="text-blue-700 text-sm">
                        Si es tu primera visita, necesitarás registrarte para acceder a nuestros servicios de préstamo de libros, reservas y eventos.
                    </p>
                </div>
            </div>
            
            <!-- Columna 2: Formulario de Registro -->
            <div class="flex flex-col">
                <div class="form-container">
                    <h2 class="form-title">Crear Cuenta</h2>
                    <p class="form-subtitle">Regístrate para acceder a todos los servicios</p>
                    
                    <form id="registerForm" action="{{ route('register') }}" method="POST">
                        @csrf 
                        <!-- Campos Nombre y Apellido en fila -->
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-6">
                            <!-- Campo Nombre -->
                            <div class="form-group">
                                <label for="name" class="form-label">
                                    <i class="fas fa-user mr-2 text-blue-500"></i>Nombre
                                </label>
                                <div class="form-input-wrapper">
                                    <input 
                                        type="text" 
                                        id="name" 
                                        name="name"
                                        placeholder="Tu nombre"
                                        class="form-input"
                                        required
                                    >
                                </div>
                            </div>                                                        
                        </div>
                        
                        <!-- Campo Email -->
                        <div class="form-group">
                            <label for="registerEmail" class="form-label">
                                <i class="fas fa-envelope mr-2 text-blue-500"></i>Correo electrónico
                            </label>
                            <div class="form-input-wrapper">
                                <input 
                                    type="email" 
                                    id="registerEmail" 
                                    name="email"
                                    placeholder="usuario@ejemplo.com"
                                    class="form-input pl-12"
                                    required
                                >
                                <div class="form-input-icon">
                                    <i class="fas fa-at"></i>
                                </div>
                            </div>
                            <p class="text-gray-500 text-sm mt-2">Usaremos este email para contactarte</p>
                        </div>
                        
                        <!-- Campos Contraseña y Repetir Contraseña en fila -->
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-6">
                            <!-- Campo Contraseña -->
                            <div class="form-group">
                                <label for="password" class="form-label">
                                    <i class="fas fa-lock mr-2 text-blue-500"></i>Contraseña
                                </label>
                                <div class="form-input-wrapper">
                                    <input 
                                        type="password" 
                                        id="password" 
                                        name="password"
                                        placeholder="Crea una contraseña"
                                        class="form-input pl-12"
                                        required
                                    >
                                    <div class="form-input-icon">
                                        <i class="fas fa-key"></i>
                                    </div>
                                    <button 
                                        type="button" 
                                        id="toggleRegisterPassword" 
                                        class="absolute right-4 top-3.5 text-gray-400 hover:text-gray-600"
                                        aria-label="Mostrar/Ocultar contraseña"
                                    >
                                        <i class="fas fa-eye"></i>
                                    </button>
                                </div>
                                <p class="text-gray-500 text-sm mt-2">Mínimo 6 caracteres</p>
                            </div>
                            
                            <!-- Campo Repetir Contraseña -->
                            <div class="form-group">
                                <label for="password_confirmation" class="form-label">
                                    <i class="fas fa-lock mr-2 text-blue-500"></i>Repetir Contraseña
                                </label>
                                <div class="form-input-wrapper">
                                    <input 
                                        type="password" 
                                        id="password_confirmation" 
                                        name="password_confirmation"
                                        placeholder="Repite tu contraseña"
                                        class="form-input pl-12"
                                        required
                                    >
                                    <div class="form-input-icon">
                                        <i class="fas fa-redo"></i>
                                    </div>
                                    <button 
                                        type="button" 
                                        id="toggleConfirmPassword" 
                                        class="absolute right-4 top-3.5 text-gray-400 hover:text-gray-600"
                                        aria-label="Mostrar/Ocultar contraseña"
                                    >
                                        <i class="fas fa-eye"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                        
                        <!-- Términos y condiciones -->
                        <div class="form-group mb-8">
                            <div class="flex items-start">
                                <input 
                                    type="checkbox" 
                                    id="acceptTerms" 
                                    name="acceptTerms"
                                    class="h-5 w-5 mt-1 rounded border-gray-300 text-blue-600 focus:ring-blue-500"
                                    required
                                >
                                <label for="acceptTerms" class="ml-2 text-gray-700 text-sm">
                                    Acepto los 
                                    <a href="#terms" class="form-link">términos y condiciones</a> 
                                    y la 
                                    <a href="#privacy" class="form-link">política de privacidad</a> 
                                    de la Biblioteca Municipal. Confirmo que soy mayor de 14 años.
                                </label>
                            </div>
                        </div>
                        
                        <!-- Botón de registro -->
                        <button type="submit" class="form-button-primary mb-6">
                            <i class="fas fa-user-plus mr-2"></i> Crear Cuenta
                        </button>
                        
                        <!-- Enlace a login -->
                        <div class="form-footer">
                            <p>
                                ¿Ya tienes una cuenta? 
                                <a href="#login" class="form-link">Inicia sesión aquí</a>
                            </p>
                        </div>
                    </form>
                </div>
                
                <!-- Información adicional para registro -->
                <div class="mt-6 bg-indigo-50 border border-indigo-200 rounded-xl p-5">
                    <h3 class="font-bold text-indigo-800 mb-3 flex items-center">
                        <i class="fas fa-gift mr-2"></i> Beneficios de registrarse
                    </h3>
                    <ul class="text-indigo-700 text-sm space-y-2">
                        <li class="flex items-start">
                            <i class="fas fa-check-circle text-green-500 mt-1 mr-2"></i>
                            <span>Préstamo de hasta 5 libros simultáneamente</span>
                        </li>
                        <li class="flex items-start">
                            <i class="fas fa-check-circle text-green-500 mt-1 mr-2"></i>
                            <span>Acceso a recursos digitales exclusivos</span>
                        </li>
                        <li class="flex items-start">
                            <i class="fas fa-check-circle text-green-500 mt-1 mr-2"></i>
                            <span>Reserva de libros desde nuestra app</span>
                        </li>
                        <li class="flex items-start">
                            <i class="fas fa-check-circle text-green-500 mt-1 mr-2"></i>
                            <span>Participación en eventos y clubes de lectura</span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
@endsection