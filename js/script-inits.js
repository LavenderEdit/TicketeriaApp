import {
  checkWEBPType,
  convertImageToWebp,
  uploadDataUser,
} from "./script-general-functions.js?v=1";

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
