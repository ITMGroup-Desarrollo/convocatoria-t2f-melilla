/* ============================================
   AMORA MELILLA — JavaScript
   ============================================ */

document.addEventListener("DOMContentLoaded", function () {

  /* ── Scroll suave para botones de ancla ── */
  document.querySelectorAll('a[href^="#"]').forEach(function (anchor) {
    anchor.addEventListener("click", function (e) {
      const target = document.querySelector(this.getAttribute("href"));
      if (target) {
        e.preventDefault();
        target.scrollIntoView({ behavior: "smooth" });
      }
    });
  });

  /* ── Dropzone PDF ───────────────────────────────────────────────── */
  const dropzone  = document.getElementById("pdfDropzone");
  const input     = document.getElementById("catalogoPdf");
  const idle      = document.getElementById("dropzoneIdle");
  const selected  = document.getElementById("dropzoneSelected");
  const fileName  = document.getElementById("dropzoneFileName");
  const clearBtn  = document.getElementById("dropzoneClear");
  const errorMsg  = document.getElementById("dropzoneError");

  if (!dropzone) return;

  const MAX_MB   = 8;
  const MAX_SIZE = MAX_MB * 1024 * 1024;

  function showFile(file) {
    if (!file) return;

    // Validar tipo y tamaño
    if (file.type !== "application/pdf" || file.size > MAX_SIZE) {
      errorMsg.style.display = "block";
      clearFile();
      return;
    }
    errorMsg.style.display = "none";

    fileName.textContent = file.name;
    idle.style.display   = "none";
    selected.classList.add("active");
  }

  function clearFile() {
    input.value          = "";
    fileName.textContent = "";
    idle.style.display   = "";
    selected.classList.remove("active");
  }

  // Cambio por click
  input.addEventListener("change", function () {
    showFile(this.files[0]);
  });

  // Drag & Drop
  ["dragenter", "dragover"].forEach(evt =>
    dropzone.addEventListener(evt, e => {
      e.preventDefault();
      dropzone.classList.add("drag-over");
    })
  );
  ["dragleave", "drop"].forEach(evt =>
    dropzone.addEventListener(evt, e => {
      e.preventDefault();
      dropzone.classList.remove("drag-over");
    })
  );
  dropzone.addEventListener("drop", function (e) {
    const file = e.dataTransfer.files[0];
    if (file) {
      // Asignar al input nativo para que PHP lo reciba
      const dt = new DataTransfer();
      dt.items.add(file);
      input.files = dt.files;
      showFile(file);
    }
  });

  // Botón quitar
  clearBtn.addEventListener("click", function (e) {
    e.stopPropagation();
    clearFile();
    errorMsg.style.display = "none";
  });
});
