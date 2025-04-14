<div class="workspace-card">
    <!-- Encabezado -->
    <div class="card-user-header">
        <h2>Noemi Ramos</h2>
        <hr class="card-divider">
    </div>

    <!-- Contenido -->
    <div class="card-content">
        <h3 class="card-section-title">WorkSpace:</h3>
        
        <div class="card-config-grid">
            <!-- Columna 1: Nombre -->
            <div class="card-config-column">
                <div class="card-config-item">
                    <span class="card-label">Nombre Del workspace</span>
                    <div class="card-value">Soporte y Mantenimiento</div>
                </div>
            </div>
            
            <!-- Columna 2: Icono -->
            <div class="card-config-column">
                <div class="card-config-item">
                    <span class="card-label">Icono del workspace</span>
                    <button class="card-edit-btn">Editar</button>
                </div>
            </div>
            
            <!-- Columna 3: Eliminar -->
            <div class="card-config-column">
                <div class="card-config-item">
                    <span class="card-label">Eliminar workspace</span>
                    <button class="card-delete-btn">Eliminar</button>
                </div>
            </div>
        </div>
    </div>

</div>

<script>
// Confirmación para eliminar
document.querySelector('.exact-delete-btn')?.addEventListener('click', function() {
    if(confirm('¿Está seguro que desea eliminar este workspace? Esta acción es irreversible.')) {
        console.log("Eliminando workspace...");
        // Lógica para eliminar
    }
});
</script>