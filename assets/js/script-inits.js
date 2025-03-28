import {
  checkWEBPType,
  convertImageToWebp,
  uploadDataUser,
  loadContent,
} from "./script-general-functions.js";

export function initConversor() {
  const input = document.querySelector(".webp-conversor");

  if (input) {
    input.addEventListener("change", () => {
      const isWebP = checkWEBPType();

      if (!isWebP) {
        convertImageToWebp();
      }
    });
  }
}

export function initFormUpload() {
  const btnUpload = document.getElementById("btn-upload");
  if (btnUpload) {
    btnUpload.addEventListener("click", (e) => {
      e.preventDefault();
      uploadDataUser();
    });
  }
}

export function initApp() {
  const sidebar = document.getElementById("sidebar");
  const content = document.getElementById("content");
  const menuItems = document.querySelectorAll(".menu-item");

  // Si alguno de estos elementos no existe, se detiene la ejecución
  if (!sidebar || !content || menuItems.length === 0) {
    console.warn("Elementos necesarios para initApp no encontrados.");
    return;
  }

  sidebar.classList.add("open");
  content.style.marginLeft = "300px";

  menuItems.forEach((item) => {
    item.addEventListener("click", function () {
      document.querySelector(".menu-item.active")?.classList.remove("active");
      this.classList.add("active");
      loadContent(this.textContent.trim().toLowerCase().replace(" ", ""));
    });
  });

  loadContent("dashboard");
}

export function initializeDashboard() {
  const dashboardOptions = document.querySelectorAll(".dashboard-option");
  const dynamicContent = document.querySelector(".dynamic-content");

  if (!dashboardOptions.length || !dynamicContent) return;

  dashboardOptions.forEach((option) => {
    option.addEventListener("click", function () {
      document
        .querySelector(".dashboard-option.active")
        ?.classList.remove("active");
      this.classList.add("active");
      // Asumimos que el texto de la opción es el identificador del contenido
      const optionText = this.querySelector(
        ".dashboard-option-text"
      )?.textContent.toLowerCase();
      if (optionText) {
        import("./script-general-functions.js").then((module) =>
          module.loadDynamicContent(optionText)
        );
      }
    });
  });

  // Carga el contenido dinámico por defecto para el dashboard
  import("./script-general-functions.js").then((module) =>
    module.loadDynamicContent("tickets")
  );
}
