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
