import { setupModalCloseButtons } from './script-modales.js';
import { togglePassword } from './script-general-functions.js'

document.addEventListener('DOMContentLoaded', () => {
    setupModalCloseButtons();
    togglePassword();
});