import { togglePassword, toggleSidebar } from "./script-general-functions.js";
import { initApp } from "./script-inits.js";
import { setupModalCloseButtons } from "./script-modales.js";

export function runComponentRegistry() {
  const path = window.location.pathname;
  const pageName = path.substring(path.lastIndexOf("/") + 1);

  switch (pageName) {
    case "index.html":
      initApp();
      window.toggleSidebar = toggleSidebar;
      break;
    case "registro.html":
      // Ejecuta funciones específicas para la página de registro
      break;
    case "login.html":
      // Ejecuta funciones específicas para la página de login
      togglePassword();
      setupModalCloseButtons();
      break;
    default:
      // Opcional: alguna función por defecto
      break;
  }
}
