document.addEventListener('DOMContentLoaded', function() {
    // Elementos del menú principal
    const menuToggle = document.getElementById('menu-toggle');
    const wrapper = document.getElementById('wrapper');
    const menuItems = document.querySelectorAll('.menu-item');
    const contenido = document.getElementById('contenido');
    
    // Estado del menú
    let menuVisible = true;
    
    // Función para alternar el menú
    function toggleMenu() {
        menuVisible = !menuVisible;
        wrapper.classList.toggle('collapsed');
        
        if (!menuVisible) {
            menuItems.forEach(item => {
                item.classList.remove('active');
                item.style.transform = 'none';
            });
        }
    }
    
    // Evento para el botón hamburguesa
    menuToggle.addEventListener('click', function(e) {
        e.stopPropagation();
        toggleMenu();
    });
    
    // Cerrar menú al hacer clic fuera
    document.addEventListener('click', function(e) {
        if (menuVisible && !wrapper.contains(e.target) && e.target !== menuToggle) {
            toggleMenu();
        }
    });
    
    // Configuración de items del menú
    menuItems.forEach(item => {
        item.addEventListener('click', function(e) {
            e.preventDefault();
            e.stopPropagation();
            
            selectMenuItem(this);
            
            // Cerrar menú en móviles
            if (window.innerWidth <= 768) {
                toggleMenu();
            }
        });
        
        // Efectos hover
        item.addEventListener('mouseenter', function() {
            if (!this.classList.contains('active')) {
                this.style.transform = 'translateX(5px)';
                this.style.transition = 'transform 0.3s ease';
            }
        });
        
        item.addEventListener('mouseleave', function() {
            if (!this.classList.contains('active')) {
                this.style.transform = 'none';
            }
        });
    });
    
    // Seleccionar item del menú
    function selectMenuItem(item) {
        menuItems.forEach(i => {
            i.classList.remove('active');
            i.style.transform = 'none';
        });
        
        item.classList.add('active');
        const page = item.getAttribute('data-page');
        loadPageContent(page);
    }
    
    // Cargar contenido de página
    function loadPageContent(page) {
        // Solo cargar si no es la página actual
        if (contenido.getAttribute('data-current-page') !== page) {
            fetch(`pages/${page}.php`)
                .then(response => response.text())
                .then(html => {
                    contenido.innerHTML = html;
                    contenido.setAttribute('data-current-page', page);
                    
                    // Inicializar scripts específicos de la página
                    if (page === 'dashboard') {
                        initDashboardPage();
                    } else if (page === 'configuracion') {
                        initConfigPage();
                    }
                })
                .catch(error => {
                    console.error('Error loading page:', error);
                });
        }
    }
    
    // Inicializar página de dashboard
    function initDashboardPage() {
        // Control del botón Tickets
        const ticketsBtn = document.getElementById('tickets-btn');
        const dashboardContent = document.getElementById('dashboard-content');
        
        if (ticketsBtn && dashboardContent) {
            ticketsBtn.addEventListener('click', function() {
                this.classList.toggle('active');
                const icon = this.querySelector('i');
                
                if (this.classList.contains('active')) {
                    icon.classList.replace('fa-caret-right', 'fa-caret-down');
                    dashboardContent.style.display = 'block';
                } else {
                    icon.classList.replace('fa-caret-down', 'fa-caret-right');
                    dashboardContent.style.display = 'none';
                }
            });
        }
        
        // Control de secciones expandibles
        document.querySelectorAll('.expand-btn').forEach(btn => {
            btn.addEventListener('click', function(e) {
                e.stopPropagation();
                const section = this.closest('.expandable-section');
                const content = section.querySelector('.section-content');
                const icon = this.querySelector('i');
                
                if (content.style.display === 'block') {
                    content.style.display = 'none';
                    icon.classList.replace('fa-chevron-down', 'fa-chevron-right');
                    section.classList.remove('active');
                } else {
                    content.style.display = 'block';
                    icon.classList.replace('fa-chevron-right', 'fa-chevron-down');
                    section.classList.add('active');
                }
            });
        });
        
        // Control de edición
        let currentSection = null;
        
        document.querySelectorAll('.edit-btn').forEach(btn => {
            btn.addEventListener('click', function(e) {
                e.stopPropagation();
                currentSection = this.closest('.expandable-section');
                
                // Llenar el formulario
                document.getElementById('edit-title').value = currentSection.querySelector('.section-title').textContent;
                document.getElementById('edit-subtitle').value = currentSection.querySelector('.section-subtitle').textContent.replace('- ', '');
                document.getElementById('edit-asignado').value = currentSection.querySelector('.ticket-info .info-value').textContent;
                document.getElementById('edit-fecha').value = currentSection.querySelectorAll('.ticket-info .info-value')[1].textContent;
                document.getElementById('edit-status').value = currentSection.querySelectorAll('.ticket-info .info-value')[2].textContent;
                document.getElementById('edit-descripcion').value = currentSection.querySelector('.ticket-description .info-value').textContent;
                
                document.getElementById('edit-modal').style.display = 'flex';
            });
        });
        
        // Cerrar modal
        document.querySelector('.cancel-btn')?.addEventListener('click', function() {
            document.getElementById('edit-modal').style.display = 'none';
        });
        
        document.getElementById('edit-modal')?.addEventListener('click', function(e) {
            if (e.target === this) {
                this.style.display = 'none';
            }
        });
        
        // Guardar cambios
        document.getElementById('edit-form')?.addEventListener('submit', function(e) {
            e.preventDefault();
            
            if (currentSection) {
                // Actualizar título y subtítulo
                currentSection.querySelector('.section-title').textContent = document.getElementById('edit-title').value;
                currentSection.querySelector('.section-subtitle').textContent = '- ' + document.getElementById('edit-subtitle').value;
                
                // Actualizar información del ticket
                const infoValues = currentSection.querySelectorAll('.ticket-info .info-value');
                infoValues[0].textContent = document.getElementById('edit-asignado').value;
                infoValues[1].textContent = document.getElementById('edit-fecha').value;
                infoValues[2].textContent = document.getElementById('edit-status').value;
                infoValues[2].className = 'info-value status-' + document.getElementById('edit-status').value.toLowerCase();
                
                // Actualizar descripción
                currentSection.querySelector('.ticket-description .info-value').textContent = document.getElementById('edit-descripcion').value;
                
                document.getElementById('edit-modal').style.display = 'none';
            }
        });
    }
    
    // Configuración de página de configuración
    function initConfigPage() {
        document.querySelectorAll('.btn-edit').forEach(btn => {
            btn.addEventListener('click', function(e) {
                e.preventDefault();
                console.log("Editando campo...");
            });
        });
        
        document.querySelector('.btn-delete')?.addEventListener('click', function(e) {
            if(!confirm('¿Está seguro de eliminar este workspace?')) {
                e.preventDefault();
            }
        });
    }
    
    // Inicialización - Seleccionar dashboard por defecto
    function initializeDashboard() {
        const dashboardItem = document.querySelector('.menu-item[data-page="dashboard"]');
        if (dashboardItem) {
            dashboardItem.classList.add('active');
            contenido.setAttribute('data-current-page', 'dashboard');
            initDashboardPage(); // Inicializar los eventos del dashboard
        }
    }
    
    // Iniciar
    initializeDashboard();
});