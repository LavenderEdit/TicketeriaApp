import { showModal } from "./script-modales.js";

export function checkWEBPType() {
  const input = document.querySelector(".webp-conversor");
  if (!input || !input.files || input.files.length === 0) {
    showModal("warningModal", "No se seleccionó ningún archivo.");
    return false;
  }

  const file = input.files[0];

  if (file.type === "image/webp") {
    showModal("successModal", "El archivo ya es de tipo WebP.");
    return true;
  } else {
    showModal(
      "warningModal",
      "El archivo no es WebP. Será convertido automáticamente."
    );
    return false;
  }
}

export function convertImageToWebp() {
  const input = document.querySelector(".webp-conversor");
  if (!input || !input.files || input.files.length === 0) {
    showModal(
      "warningModal",
      "No se seleccionó ningún archivo para convertir."
    );
    return;
  }

  const file = input.files[0];

  if (file.type === "image/webp") {
    showModal("successModal", "El archivo ya es de tipo WebP.");
    return;
  }

  const reader = new FileReader();

  reader.onload = function (event) {
    const img = new Image();
    img.onload = function () {
      const canvas = document.createElement("canvas");
      canvas.width = img.width;
      canvas.height = img.height;
      const ctx = canvas.getContext("2d");
      ctx.drawImage(img, 0, 0);

      canvas.toBlob(
        function (blob) {
          if (!blob) {
            showModal("errorModal", "Error al convertir la imagen a WebP.");
            return;
          }

          const originalName = file.name;
          const baseName = originalName.replace(/\.[^/.]+$/, "");
          const webpFileName = baseName + ".webp";

          const webpFile = new File([blob], webpFileName, {
            type: "image/webp",
          });

          const dataTransfer = new DataTransfer();
          dataTransfer.items.add(webpFile);

          input.files = dataTransfer.files;

          showModal("successModal", "Imagen convertida exitosamente a WebP.");
        },
        "image/webp",
        0.92
      );
    };

    img.onerror = function () {
      showModal("errorModal", "Error al cargar la imagen para conversión.");
    };

    img.src = event.target.result;
  };

  reader.onerror = function () {
    showModal("errorModal", "Error al leer el archivo.");
  };

  reader.readAsDataURL(file);
}

/* 
    Nota: La función está preparada para recibir los datos de un formulario
    Nota 2: Falta modificaciones en la función para asi permitir subidas de imagenes grandes
    Nota 3: La imagen mas grande subida fue de 55.4 kb
    Notita Extra: Avance porfis que me duermo a la firme
 */
export function uploadDataUser() {
  const input = document.querySelector(".webp-conversor");
  if (!input || !input.files || input.files.length === 0) {
    showModal("warningModal", "No se seleccionó ningún archivo para subir.");
    return;
  }

  const file = input.files[0];

  const formData = new FormData();
  formData.append("image", file);

  fetch("./php/uploadDataUser.php", {
    method: "POST",
    body: formData,
  })
    .then((response) => response.json())
    .then((data) => {
      if (data.success) {
        showModal(
          "successModal",
          "Imagen subida a la base de datos exitosamente."
        );
      } else {
        showModal("errorModal", "Error: " + data.message);
      }
    })
    .catch((err) => {
      showModal("errorModal", "Error al subir la imagen: " + err.message);
    });
}

export function togglePassword() {
  const btnMostrarContraList = document.querySelectorAll(".btn-show-container");

  btnMostrarContraList.forEach((btn) => {
    btn.addEventListener("click", function () {
      const parent = btn.closest(".pwd-container");
      if (parent) {
        const inputContra = parent.querySelector(".contraClass");
        const iconoOjoAbierto = parent.querySelector(".iconoOjoAbierto");
        const iconoOjoCerrado = parent.querySelector(".iconoOjoCerrado");

        if (inputContra && iconoOjoAbierto && iconoOjoCerrado) {
          if (inputContra.type === "password") {
            inputContra.type = "text";
            iconoOjoAbierto.style.display = "none";
            iconoOjoCerrado.style.display = "block";
          } else {
            inputContra.type = "password";
            iconoOjoAbierto.style.display = "block";
            iconoOjoCerrado.style.display = "none";
          }
        }
      }
    });
  });
}

export function toggleSidebar() {
  const sidebar = document.getElementById("sidebar");
  const content = document.getElementById("content");
  const isOpen = sidebar.classList.toggle("open");
  content.style.marginLeft = isOpen ? "300px" : "0";
}

export function loadContent(page) {
  fetch(`html-files-index/${page}.html`)
    .then((response) =>
      response.ok
        ? response.text()
        : Promise.reject("No se pudo cargar el contenido")
    )
    .then((data) => {
      document.getElementById(
        "main-content"
      ).innerHTML = `<div class="content-container">${data}</div>`;
      loadScript(`./assets/js/${page}.js`);
      // Si es el dashboard, se puede invocar una función de inicialización que se exporte o definirla en otro módulo
      if (page === "dashboard") {
        import("./script-inits.js").then((module) =>
          module.initializeDashboard()
        );
      }
    })
    .catch((error) => console.error("Error al cargar el contenido:", error));
}

export function loadScript(scriptPath) {
  fetch(scriptPath).then((res) => {
    if (res.ok) {
      const script = document.createElement("script");
      script.src = scriptPath;
      document.body.appendChild(script);
    }
  });
}

export function loadDynamicContent(type) {
  fetch(`html-files-index/content-dashboard/${type}.html`)
    .then((response) =>
      response.ok
        ? response.text()
        : Promise.reject("No se pudo cargar el contenido")
    )
    .then((data) => {
      const dynamicContent = document.querySelector(".dynamic-content");
      if (dynamicContent) {
        dynamicContent.innerHTML = data;
      }
    })
    .catch((error) =>
      console.error("Error al cargar contenido dinámico:", error)
    );
}
