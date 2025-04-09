document.addEventListener('DOMContentLoaded', function() {
    const toggleMenu = document.getElementById('toggle-menu');
    const sidebar = document.getElementById('sidebar');
    const mainContent = document.querySelector('.main-content');
    
    // Función para abrir/cerrar el menú
    function toggleSidebar() {
        sidebar.classList.toggle('active');
        document.body.classList.toggle('menu-open');
        
        // Ajustar el margen del contenido principal
        if (sidebar.classList.contains('active')) {
            mainContent.style.marginLeft = '250px';
        } else {
            mainContent.style.marginLeft = '0';
        }
    }
    
    // Evento para el botón de menú
    toggleMenu.addEventListener('click', toggleSidebar);
    
    // Eventos para los items del menú
    const menuItems = document.querySelectorAll('#sidebar ul li');
    menuItems.forEach(item => {
        item.addEventListener('click', function() {
            // Remover clase active de todos los items
            menuItems.forEach(el => el.classList.remove('active'));
            
            // Agregar clase active al item clickeado
            this.classList.add('active');
            
            // Cerrar el menú en dispositivos móviles
            if (window.innerWidth < 768) {
                toggleSidebar();
            }
        });
    });
    
    // Ajustar el menú al cambiar el tamaño de la ventana
    window.addEventListener('resize', function() {
        if (window.innerWidth >= 768) {
            sidebar.classList.add('active');
            mainContent.style.marginLeft = '250px';
        } else {
            sidebar.classList.remove('active');
            mainContent.style.marginLeft = '0';
        }
    });
    
    // Inicializar el menú según el tamaño de pantalla
    if (window.innerWidth >= 768) {
        sidebar.classList.add('active');
        mainContent.style.marginLeft = '250px';
    }
});

// Ejemplo para seleccionar fila
document.querySelectorAll('.tech-table tr').forEach(row => {
    row.addEventListener('click', function() {
        document.querySelectorAll('.tech-table tr').forEach(r => r.classList.remove('selected'));
        this.classList.add('selected');
    });
});