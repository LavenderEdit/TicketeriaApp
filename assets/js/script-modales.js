//Mostrar el Modal
export function showModal(modalId, message) {
    const modal = document.getElementById(modalId);
    const dialogDescription = modal.querySelector('.dialog-description');
    dialogDescription.textContent = message;
    modal.classList.remove('hidden');
}

//Ocultar el modal
export function hideModal(modalId) {
    document.getElementById(modalId).classList.add('hidden');
}

//Cerrar el modal
export function setupModalCloseButtons() {
    document.getElementById('closeSuccessModal').addEventListener('click', () => hideModal('successModal'));
    document.getElementById('closeErrorModal').addEventListener('click', () => hideModal('errorModal'));
    document.getElementById('closeWarningModal').addEventListener('click', () => hideModal('warningModal'));
}
