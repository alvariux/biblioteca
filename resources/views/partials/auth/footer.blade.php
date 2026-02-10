<!-- Pie de página -->
        <footer class="mt-12 text-center text-gray-600">
            <div class="flex flex-col md:flex-row justify-center items-center space-y-4 md:space-y-0 md:space-x-8 mb-4">
                <a href="#help" class="hover:text-blue-600 transition-colors">
                    <i class="fas fa-question-circle mr-2"></i> Ayuda
                </a>
                <a href="#contact" class="hover:text-blue-600 transition-colors">
                    <i class="fas fa-envelope mr-2"></i> Contacto
                </a>
                <a href="#privacy" class="hover:text-blue-600 transition-colors">
                    <i class="fas fa-shield-alt mr-2"></i> Privacidad
                </a>
                <a href="#terms" class="hover:text-blue-600 transition-colors">
                    <i class="fas fa-file-contract mr-2"></i> Términos
                </a>
            </div>
            <p class="text-sm">
                © 2023 Biblioteca Municipal. Todos los derechos reservados.
                <span class="block md:inline mt-1 md:mt-0">
                    <i class="fas fa-map-marker-alt mx-2"></i> Av. Principal 123, Centro, Ciudad
                </span>
            </p>
        </footer>
    </div>

    <h1>Footer</h1>

    <!-- JavaScript mínimo para funcionalidad básica -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Funcionalidad para mostrar/ocultar contraseña
            function setupPasswordToggle(buttonId, inputId) {
                const toggleBtn = document.getElementById(buttonId);
                const passwordInput = document.getElementById(inputId);
                
                if (toggleBtn && passwordInput) {
                    toggleBtn.addEventListener('click', function() {
                        const type = passwordInput.getAttribute('type') === 'password' ? 'text' : 'password';
                        passwordInput.setAttribute('type', type);
                        
                        // Cambiar icono
                        const icon = this.querySelector('i');
                        if (type === 'text') {
                            icon.classList.remove('fa-eye');
                            icon.classList.add('fa-eye-slash');
                        } else {
                            icon.classList.remove('fa-eye-slash');
                            icon.classList.add('fa-eye');
                        }
                    });
                }
            }
            
            // Configurar toggles de contraseña
            setupPasswordToggle('toggleLoginPassword', 'loginPassword');
            setupPasswordToggle('toggleRegisterPassword', 'password');
            setupPasswordToggle('toggleConfirmPassword', 'password_confirmation');
            
        });
    </script>
</body>
</html>