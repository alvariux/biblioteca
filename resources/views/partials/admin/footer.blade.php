<!-- Footer -->
    <footer class="bg-white border-t py-4 px-6">
        <div class="flex flex-col md:flex-row justify-between items-center">
            <div class="mb-4 md:mb-0">
                <p class="text-gray-600">© 2023 Sistema de Administración de Biblioteca. Todos los derechos reservados.</p>
            </div>
            <div class="flex space-x-4">
                <a href="#" class="text-gray-600 hover:text-blue-600">Política de privacidad</a>
                <a href="#" class="text-gray-600 hover:text-blue-600">Términos de uso</a>
                <a href="#" class="text-gray-600 hover:text-blue-600">Soporte</a>
            </div>
        </div>
    </footer>
</div>
    </div>
    
    <!-- JavaScript para funcionalidades -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Elementos del DOM
            const menuToggle = document.getElementById('menu-toggle');
            const sidebar = document.getElementById('sidebar');
            const overlay = document.getElementById('overlay');
            const headerLinks = document.querySelectorAll('.header-link');
            const sidebarLinks = document.querySelectorAll('.sidebar-link');
            const pageTitle = document.getElementById('page-title');
            const currentPage = document.getElementById('current-page');
            const mainTitle = document.getElementById('main-title');
            
            // Función para cambiar de página
            function changePage(pageName) {
                // Actualizar títulos
                pageTitle.textContent = pageName;
                currentPage.textContent = pageName;
                mainTitle.textContent = `Gestión de ${pageName}`;
                
                // Actualizar enlaces activos
                headerLinks.forEach(link => {
                    if (link.textContent === pageName) {
                        link.classList.add('bg-blue-50', 'text-blue-700');
                    } else {
                        link.classList.remove('bg-blue-50', 'text-blue-700');
                    }
                });
                
                sidebarLinks.forEach(link => {
                    if (link.querySelector('span').textContent === pageName) {
                        link.classList.add('bg-gray-800', 'text-white');
                        link.classList.remove('hover:bg-gray-800');
                    } else {
                        link.classList.remove('bg-gray-800', 'text-white');
                        link.classList.add('hover:bg-gray-800');
                    }
                });
            }
            
            // Toggle del menú sidebar en móviles
            menuToggle.addEventListener('click', function() {
                sidebar.classList.toggle('-translate-x-full');
                overlay.classList.toggle('hidden');
                menuToggle.classList.toggle('open');
            });
            
            // Cerrar sidebar al hacer clic en el overlay
            overlay.addEventListener('click', function() {
                sidebar.classList.add('-translate-x-full');
                overlay.classList.add('hidden');
                menuToggle.classList.remove('open');
            });
            
            // Cerrar sidebar en móviles al hacer clic en un enlace
            sidebarLinks.forEach(link => {
                link.addEventListener('click', function() {
                    if (window.innerWidth < 768) {
                        sidebar.classList.add('-translate-x-full');
                        overlay.classList.add('hidden');
                        menuToggle.classList.remove('open');
                    }
                    
                    // Cambiar a la página correspondiente
                    const pageName = this.querySelector('span').textContent;
                    changePage(pageName);
                });
            });
            
            // Cambiar página al hacer clic en enlaces del header
            headerLinks.forEach(link => {
                link.addEventListener('click', function(e) {
                    e.preventDefault();
                    const pageName = this.textContent;
                    changePage(pageName);
                });
            });
            
            // Cerrar sidebar en pantallas grandes al redimensionar
            window.addEventListener('resize', function() {
                if (window.innerWidth >= 768) {
                    sidebar.classList.remove('-translate-x-full');
                    overlay.classList.add('hidden');
                    menuToggle.classList.remove('open');
                } else {
                    sidebar.classList.add('-translate-x-full');
                }
            });
            
            // Inicializar la página activa
            changePage('Libros');
        });
    </script>
</body>
</html>