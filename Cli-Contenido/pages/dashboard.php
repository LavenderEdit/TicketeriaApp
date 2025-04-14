<div class="tickets-container">
    <!-- Botón Tickets -->
    <button id="tickets-btn" class="tickets-btn">
    <span>Tickets</span>
    <i class="fas fa-caret-right"></i>
</button>
    
    <div id="dashboard-content" class="dashboard-content scrollable-container">

        <!-- Secciones GLP -->
        <div class="expandable-section active">
            <div class="section-header">
                <div class="header-content">
                    <span class="section-title">Test del cel editado</span>
                    <span class="section-subtitle">- FALABELLA</span>
                </div>
                <div class="header-actions">
                    <button class="expand-btn"><i class="fas fa-chevron-down"></i></button>
                    <button class="edit-btn"><i class="fas fa-edit"></i></button>
                </div>
            </div>
            <div class="section-content" style="display: block;">
                <div class="ticket-detail-grid">
                    <div class="ticket-info">
                        <div class="info-row">
                            <span class="info-label">Asignado</span>
                            <span class="info-value">Noemi</span>
                        </div>
                        <div class="info-row">
                            <span class="info-label">Fecha</span>
                            <span class="info-value">December 20th, 2024</span>
                        </div>
                        <div class="info-row">
                            <span class="info-label">Status</span>
                            <span class="info-value status-reservado">Reservado</span>
                        </div>
                    </div>
                    <div class="ticket-description">
                        <div class="info-row">
                            <span class="info-label">Descripción:</span>
                            <span class="info-value"></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="expandable-section">
            <div class="section-header">
                <div class="header-content">
                    <span class="section-title">Test prediction</span>
                    <span class="section-subtitle">- LEDA</span>
                </div>
                <div class="header-actions">
                    <button class="expand-btn"><i class="fas fa-chevron-right"></i></button>
                    <button class="edit-btn"><i class="fas fa-edit"></i></button>
                </div>
            </div>
            <div class="section-content">
                <div class="ticket-detail-grid">
                    <div class="ticket-info">
                        <div class="info-row">
                            <span class="info-label">Asignado</span>
                            <span class="info-value">Noemi</span>
                        </div>
                        <div class="info-row">
                            <span class="info-label">Fecha</span>
                            <span class="info-value">December 21th, 2024</span>
                        </div>
                        <div class="info-row">
                            <span class="info-label">Status</span>
                            <span class="info-value status-activo">Activo</span>
                        </div>
                    </div>
                    <div class="ticket-description">
                        <div class="info-row">
                            <span class="info-label">Descripción:</span>
                            <span class="info-value">Descripción del ticket LEDA</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Modal de edición -->
<div id="edit-modal" class="edit-modal">
    <div class="modal-content">
        <h3>Editar Ticket</h3>
        <form id="edit-form">
            <div class="form-row">
                <div class="form-group">
                    <label for="edit-title">Título:</label>
                    <input type="text" id="edit-title" value="Test del cel editado">
                </div>
                <div class="form-group">
                    <label for="edit-subtitle">Subtítulo:</label>
                    <input type="text" id="edit-subtitle" value="FALABELLA">
                </div>
            </div>
            
            <div class="form-row">
                <div class="form-group">
                    <label for="edit-asignado">Asignado:</label>
                    <input type="text" id="edit-asignado" value="Noemi">
                </div>
                <div class="form-group">
                    <label for="edit-fecha">Fecha:</label>
                    <input type="text" id="edit-fecha" value="December 20th, 2024">
                </div>
            </div>
            
            <div class="form-row">
                <div class="form-group">
                    <label for="edit-status">Status:</label>
                    <select id="edit-status">
                        <option value="Reservado">Reservado</option>
                        <option value="Activo">Activo</option>
                        <option value="Completado">Completado</option>
                    </select>
                </div>
            </div>
            
            <div class="form-group">
                <label for="edit-descripcion">Descripción:</label>
                <textarea id="edit-descripcion" rows="4"></textarea>
            </div>
            
            <div class="form-actions">
                <button type="submit" class="save-btn">Guardar</button>
                <button type="button" class="cancel-btn">Cancelar</button>
            </div>
        </form>
    </div>
</div>

